<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\reviewRequest;
use App\Review;
use App\Models\products;

class ReviewsController extends Controller {

    public function storeReview(reviewRequest $request) {
        $sum_rate = 0;
        $review = new Review;
        $review->name = $request->name;
        $review->mobile = $request->mobile;
        $review->email = $request->email;
        $review->city = $request->city;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->product_id = $request->product_id;
        $review->save();

        $product = Review::findOrFail($review->product_id);
        $sum_users_rated = Review::where('product_id', $review->product_id)->count();
        $number_users = Review::where('product_id', $review->product_id)->get();
        foreach ($number_users as $product) {
            $sum_rate += $product->rating;
        }
        $total_rate = $sum_rate / $sum_users_rated;
       products::where('id', $review->product_id)->update(['total_rate' => $total_rate]);
    }

}
