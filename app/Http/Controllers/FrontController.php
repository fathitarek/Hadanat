<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class FrontController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $categories = categories::latest()->paginate(10);
        return view('public.home')->with('categories', $categories);
    }

    public function searchQuery($name) {
        return products::where('name_en', 'like', '%' . $name . '%')
                        ->orWhere('name_ar', 'like', '%' . $name . '%')->paginate(10);
    }

    public function searchProduct() {
        if (isset($_GET['name'])) {
            \Session::put('name', $_GET['name']);
        }
        $searchProducts = $this->searchQuery(\Session::get('name'));
        //$searchProducts = products::where('name_en', 'like', '%' . \Session::get('name') . '%')
        //    ->orWhere('name_ar', 'like', '%' . \Session::get('name') . '%')->paginate(1);
        return view('public.search')->with('searchProducts', $searchProducts);
    }

    public function listProduct($id) {
        DB::table('views')->insert(['user-id' => '1', 'product_id' => $id]);
        $product = products::findOrFail($id);
        $number_views = DB::table('views')->where('product_id', $id)->count();
        DB::table('products')->where('id', $id)->update(['count_view' => $number_views]);
        return view('public.product_list')->with('product', $product);
    }

    public function ProductsRelatedCategory($id) {
        $earthRadius = 6371000;
       
        if (isset($_GET['lat']) && isset($_GET['lang'])) {
            $latFrom = deg2rad($_GET['lat']);
            $lonFrom = deg2rad($_GET['lang']);
            $products = products::latest()->where('category_id', $id)->paginate(10);
//        dd($products);
            foreach ($products as $product) {
                $latTo = deg2rad($product->latitude);
                $lonTo = deg2rad((float) $product->longitude);
                $latDelta = $latTo - $latFrom;
                $lonDelta = $lonTo - $lonFrom;
                $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                                        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
                $product->distance = round((($angle * $earthRadius) / 1000), 1);
                $new = products::find($product->id);
                $new->distance = $product->distance;
                if ($new->save()) {
                    $sort_products = \DB::table('products')->where('category_id', $id)->orderBy('distance')->get();
                }
            }
            return view('public.ProductsRelatedCategory')->with('products', $products)->with('sort_products', $sort_products);
        } else {
            $sort_products = \DB::table('products')->where('category_id', $id)->paginate(10);
            $products = \DB::table('products')->where('category_id', $id)->paginate(10);
            return view('public.ProductsRelatedCategory')->with('products', $products)->with('sort_products', $sort_products);
        }
    }

}
