<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function filter(Request $request, Product $product)
    {
        
        $country = Input::has('country') ? Input::get('country') : null;
        $products = Product::where(function($query)
        {
            $f_type = Input::has('f_type') ? Input::get('f_type') : null;
            $s_type = Input::has('s_type') ? Input::get('s_type') : null;
            $japan = Input::has('japan') ? Input::get('japan') : null;
            $query->where('type', '=', $f_type)
                ->orWhere('type', '=', $s_type)
                ->orWhere('country', '=', $japan)
                ->orWhere('country', '=', $japan)
                ->orWhere('country', '=', $japan);
        })->get();
        // $products = Product::where(function($query){
            
        //     $hydro_f = Input::has('hydro_f') ? Input::get('hydro_f') : null;
        //     $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f') : null;
        //     $hydro_f = Input::has('drink_f') ? Input::get('drink_f') : null;

        //     $sea = Input::has('sea') ? Input::get('sea') : null;
        //     $animals = Input::has('animals') ? Input::get('animals') : null;

        //     $min_price = Input::has('min-price') ? Input::get('min-price') : null;
        //     $max_price = Input::has('max-price') ? Input::get('max-price') : null;
            
        //     if(isset($min_price) && isset($max_price))
        //     {
        //         $query->where('price', '>=', $min_price)->where('price', '<=', $max_price);
        //     }
        // })->get();
        return view('product.product')->with('product', $products);
    }
}
