<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Repositories\productsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\categories;
use Illuminate\Support\Facades\Input;

class productsController extends AppBaseController {

    /** @var  productsRepository */
    private $productsRepository;

    public function __construct(productsRepository $productsRepo) {
        $this->productsRepository = $productsRepo;
    }

    /**
     * 
     * @param type $field_name
     * @param type $destination
     * @return boolean
     */
    function uploadFile($field_name, $destination) {

        if (!is_null(Input::file($field_name))) {
            $file = Input::file($field_name)->getClientOriginalName();
            $input[$field_name] = $file;
            $file1 = Input::file($field_name);
            $uploadSuccess = $file1->move($destination, $file);
            return $file;
        } else {
            return false;
        }
    }
    /**
     * Display a listing of the products.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->productsRepository->pushCriteria(new RequestCriteria($request));
        $products = $this->productsRepository->all();

        return view('products.index')
                        ->with('products', $products);
    }

    /**
     * Show the form for creating a new products.
     *
     * @return Response
     */
    public function create() {
        $categories = categories::latest()->pluck('name_en', 'id');

        return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created products in storage.
     *
     * @param CreateproductsRequest $request
     *
     * @return Response
     */
    public function store(CreateproductsRequest $request) {
        $upload_cover = $this->uploadFile('cover', public_path() . '/uploads/products');
        $upload_logo = $this->uploadFile('logo', public_path() . '/uploads/products');
        if (gettype($upload_cover) === 'string' && gettype($upload_logo) === 'string') {
            $input = $request->all();
            $input['cover'] = $upload_cover;
            $input['logo'] = $upload_logo;
            
            $products = $this->productsRepository->create($input);
            Flash::success('Products saved successfully.');
            return redirect(route('products'));
        } else {
            Flash::success('Products can`t saved.');

            return redirect(route('products'));
        }
    }

    /**
     * Display the specified products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $products = $this->productsRepository->findWithoutFail($id);
        $categories = categories::latest()->pluck('name_en', 'id');

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products'));
        }

        return view('products.show')->with('products', $products)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $products = $this->productsRepository->findWithoutFail($id);
        $categories = categories::latest()->pluck('name_en', 'id');
        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products'));
        }

        return view('products.edit')->with('products', $products)->with('categories', $categories);
    }

    /**
     * Update the specified products in storage.
     *
     * @param  int              $id
     * @param UpdateproductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductsRequest $request) {
          $input = $request->all();
        if (isset($input['cover'])) {
         $upload_cover = $this->uploadFile('cover', public_path() . '/uploads/products');
            if (gettype($upload_cover) === 'string') {
                $input['cover'] = $upload_cover;
            }
        }

        if (isset($input['logo'])) {
        $upload_logo = $this->uploadFile('logo', public_path() . '/uploads/products');
            if (gettype($upload_logo) === 'string') {
                $input['logo'] = $upload_logo;
            }
        }
        
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update($input, $id);

        Flash::success('Products updated successfully.');

        return redirect(route('products'));
    }

    /**
     * Remove the specified products from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {

        try {
            $products = $this->productsRepository->findWithoutFail($id);
            $this->productsRepository->delete($id);
        } catch (Exception $exc) {
            Flash::error('Products not found');

            return redirect(route('products'));
        }

//        $products = $this->productsRepository->findWithoutFail($id);
//
//        if (empty($products)) {
//            Flash::error('Products not found');
//
//            return redirect(route('products'));
//        }
//
//        $this->productsRepository->delete($id);
//
//        Flash::success('Products deleted successfully.');
//
//        return redirect(route('products'));
    }

}
