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
        if($request->ajax())
        {      
            $products = Product::where(function($query)
            {
                $f_type = Input::has('f_type') ? Input::get('f_type') : null;
                $s_type = Input::has('s_type') ? Input::get('s_type') : null;
                $japan = Input::has('japan') ? Input::get('japan') : null;
                $usa = Input::has('usa') ? Input::get('usa') : null;
                $other = Input::has('other') ? Input::get('other') : null;
                $hydro_f = Input::has('hydro_f') ? Input::get('hydro_f') : null;
                $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f') : null;
                $drink_f = Input::has('drink_f') ? Input::get('drink_f') : null;
                $sea = Input::has('sea') ? Input::get('sea') : null;
                $animals = Input::has('animals') ? Input::get('animals') : null;
                $min_price = Input::has('min-price') ? Input::get('min-price', 0) : null;
                $max_price = Input::has('max-price') ? Input::get('max-price', 10000) : null;

                $query->where('type', '=', $f_type)
                    ->orWhere('type', '=', $s_type)
                    ->orWhere('country', '=', $japan)
                    ->orWhere('country', '=', $usa)
                    ->orWhere('country', '=', $other)
                    ->orWhere('form_issue', '=', $hydro_f)
                    ->orWhere('form_issue', '=', $tablet_f)
                    ->orWhere('form_issue', '=', $drink_f)
                    ->orWhere('material', '=', $sea)
                    ->orWhere('material', '=', $animals)
                    ->orWhereBetween('price', [$min_price, $max_price]);
                    
            })->get();
            return view('product.product(list)')->with('product', $products);
        }
        return view('product.product')->with('product', $products);
    }
}
