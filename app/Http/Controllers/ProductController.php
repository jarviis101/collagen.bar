<?php

namespace App\Http\Controllers;

use App\Collagen;
use App\HairCare;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Request;


class ProductController extends Controller
{
    public static function filterCollagen(Request $request, Collagen $product)
    {
        
        if(Request::isMethod('post'))
        {      
            if(empty(Request::all()))
            {
                $product = Collagen::orderBy('created_at')->get();
                return view('product.product(list)')->with('product', $product);
            }
            $product = Collagen::where(function($query)
            {
                $type = Request::has('type') ? Request::input('type') : null;
                
                $form_issue = Request::has('form_issue') ? Request::input('form_issue') : null;
                $material = Request::has('material') ? Request::input('material') : null;
                // $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f', 'tablet_f') : null;
                $min_price = Request::has('min-price') ? Request::input('min-price') : 0;
                $max_price = Request::has('max-price') ? Request::input('max-price') : 1000;

                $query->where('type', '=', $type)
                    ->orWhere('type', '=', $type['0'])
                    ->orWhere(function($query)
                    {
                        $country = Request::input('country');
                        foreach($country as $cntr)
                        {
                            $query->where('country', '=', $cntr);
                        }
                    })
                    ->orWhere('form_issue', '=', $form_issue)
                    ->orWhere('form_issue', '=', $form_issue['0'])
                    ->orWhere('form_issue', '=', $form_issue['1'])
                    ->orWhere('material', '=', $material)
                    ->orWhere('material', '=', $material['0'])
                    ->orWhereBetween('price', [$min_price, $max_price]);
            })->get();
            
            return view('product.product(list)')->with('product', $product);
        }
        return view('product.product')->with('product', $product);
    }
    public static function filterHairCare(Request $request, Collagen $product)
    {
        if(Request::isMethod('post'))
        {      
            if(empty(Request::all()))
            {
                $product = HairCare::orderBy('created_at')->get();
                return view('product.product(list)')->with('product', $product);
            }
            $product = HairCare::where(function($query)
            {
                $type = Request::input('type');
                $country = Request::input('country');
                $brand = Request::input('brand');
                $type_of_hair = Request::input('type_of_hair');
                $product_type = Request::input('product_type');
                // $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f', 'tablet_f') : null;
                $min_price = Request::has('min-price') ? Request::input('min-price') : 0;
                $max_price = Request::has('max-price') ? Request::input('max-price') : 1000;

                $query->where('type', '=', $type['0'])
                    ->orWhere('type', '=', $type['1'])
                    ->orWhere('country', '=', $country['0'])
                    ->orWhere('country', '=', $country['1'])
                    ->orWhere('country', '=', $country['2'])
                    ->orWhere('form_issue', '=', $form_issue['0'])
                    ->orWhere('form_issue', '=', $form_issue['1'])
                    ->orWhere('form_issue', '=', $form_issue['2'])
                    ->orWhere('material', '=', $material['0'])
                    ->orWhere('material', '=', $material['1'])
                    ->orWhereBetween('price', [$min_price, $max_price]);
            })->get();
            
            return view('product.product(list)')->with('product', $product);
        }
        return view('product.product')->with('product', $product);
    }
}
