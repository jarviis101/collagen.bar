<?php

namespace App\Http\Controllers;

use App\Collagen;
use App\HairCare;

use App\Review;
use App\ReviewCosmetic;
use App\ReviewHairCare;

use Illuminate\Http\Request as HttpReq;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Request;

class ReviewController extends Controller
{
    public static function addReviewCollagen(Request $request, Collagen $product)
    {
        $collagen = Collagen::first();
        $category_id = $collagen->category_id;
        
        $slug = Request::get('slug');
        $name = Request::has('name') ? Request::get('name') : null;
        $email = Request::has('email') ? Request::get('email') : null;
        $review = Request::has('review') ? Request::get('review') : null;

        $product = Collagen::where('slug', '=', $slug)->first();
        $id = $product->id;
        $current = new Review;

        $current->from = $name;
        $current->email = $email;
        $current->comment = $review;
        $current->product = $slug;

        $current->save();

        return redirect()->back();
        
    }
    public static function addReviewHairCare(Request $request, HairCare $product)
    {
        $collagen = HairCare::first();
        $category_id = $collagen->category_id;
        
        $slug = Request::get('slug');
        $name = Request::has('name') ? Request::get('name') : null;
        $email = Request::has('email') ? Request::get('email') : null;
        $review = Request::has('review') ? Request::get('review') : null;

        $product = HairCare::where('slug', '=', $slug)->first();
        $id = $product->id;
        $current = new ReviewHairCare;

        $current->from = $name;
        $current->email = $email;
        $current->comment = $review;
        $current->product = $slug;

        $current->save();

        return redirect()->back();
    }
}
