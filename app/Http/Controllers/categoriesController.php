<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use App\Repositories\categoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

class categoriesController extends AppBaseController {

    /** @var  categoriesRepository */
    private $categoriesRepository;

    public function __construct(categoriesRepository $categoriesRepo) {
        $this->categoriesRepository = $categoriesRepo;
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
     * Display a listing of the categories.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->categoriesRepository->pushCriteria(new RequestCriteria($request));
        $categories = $this->categoriesRepository->all();

        return view('categories.index')
                        ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new categories.
     *
     * @return Response
     */
    public function create() {
        return view('categories.create');
    }

    /**
     * Store a newly created categories in storage.
     *
     * @param CreatecategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreatecategoriesRequest $request) {
        $upload = $this->uploadFile('image', public_path() . '/uploads/category');
        // dd($upload);
        $input = $request->all();

        if (gettype($upload) === 'string') {
            // dd($input['image']);
            $input['image'] = $upload;
            $categories = $this->categoriesRepository->create($input);

            Flash::success('Categories saved successfully.');

            return redirect(route('categories'));
        } else {
            Flash::success('Categories can`t saved.');

            return redirect(route('categories'));
        }
    }

    /**
     * Display the specified categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {

        $categories = $this->categoriesRepository->findWithoutFail($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified categories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $categories = $this->categoriesRepository->findWithoutFail($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified categories in storage.
     *
     * @param  int              $id
     * @param UpdatecategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecategoriesRequest $request) {
        $input = $request->all();
        //dd($input['name_en']);
        if (isset($input['image'])) {
            $upload = $this->uploadFile('image', public_path() . '/uploads/category');
            if (gettype($upload) === 'string') {
                $input['image'] = $upload;
            }
        }
        $categories = $this->categoriesRepository->findWithoutFail($id);
        if (empty($categories)) {
            Flash::error('Categories not found');
            return redirect(route('categories'));
        }

        $categories = $this->categoriesRepository->update($input, $id);

        Flash::success('Categories updated successfully.');

        return redirect(route('categories'));
    }

    /**
     * Remove the specified categories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        try {
            $categories = $this->categoriesRepository->findWithoutFail($id);
            $this->categoriesRepository->delete($id);
        } catch (Exception $exc) {
            Flash::error('Categories not found');

            return redirect(route('categories'));
        }


//        dd($categories);
//
//        if (empty($categories)) {
//            Flash::error('Categories not found');
//
//            return redirect(route('categories'));
//        }
//
//        $this->categoriesRepository->delete($id);
//
//        Flash::success('Categories deleted successfully.');
//
//        return redirect(route('categories'));
//    }
    }

}
