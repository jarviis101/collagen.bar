<?php

namespace App\Http\Controllers;

use App\Collagen;
use App\HairCare;

use Session;
use App\Cart;
use Illuminate\Http\Request as HttpReq;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Request;


class ProductController extends Controller
{
    public static function filterCollagen(Request $request, Collagen $product)
    {
        $collagen = Collagen::first();
        $category_id = $collagen->category_id;
        if(Request::isMethod('post'))
        {      
            if(empty(Request::all()))
            {
                $product = Collagen::orderBy('created_at')->get();
                return view('product.product(list)')->with('product', $product);
            }
            $product = Collagen::where(function($query)
            {
                $type1 = Request::has('type1') ? Request::get('type1') : null;
                $type2 = Request::has('type2') ? Request::get('type2') : null;
                $country1 = Request::has('country1') ? Request::get('country1') : null;
                $country2 = Request::has('country2') ? Request::get('country2') : null;
                $country3 = Request::has('country3') ? Request::get('country3') : null;
                $form_issue1 = Request::has('form_issue1') ? Request::get('form_issue1') : null;
                $form_issue2 = Request::has('form_issue2') ? Request::get('form_issue2') : null;
                $form_issue3 = Request::has('form_issue3') ? Request::get('form_issue3') : null;
                $material1 = Request::has('material1') ? Request::get('material1') : null;
                $material2 = Request::has('material2') ? Request::get('material2') : null;
                // $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f', 'tablet_f') : null;
                $min_price = Request::has('min-price') ? Request::get('min-price') : 0;
                $max_price = Request::has('max-price') ? Request::get('max-price') : 1000;

                $query->where('type', '=', $type1)
                    ->orWhere('type', '=', $type2)
                    ->orWhere('country', '=', $country1)
                    ->orWhere('country', '=', $country2)
                    ->orWhere('country', '=', $country3)
                    ->orWhere('form_issue', '=', $form_issue1)
                    ->orWhere('form_issue', '=', $form_issue2)
                    ->orWhere('form_issue', '=', $form_issue3)
                    ->orWhere('material', '=', $material1)
                    ->orWhere('material', '=', $material2)
                    ->orWhereBetween('price', [$min_price, $max_price]);
            })->get();
            
            return view('product.product(list)')->with('product', $product)->with('category_id', $category_id);
        }
        return view('product.product')->with('product', $product)->with('category_id', $category_id);
    }
    public static function filterHairCare(Request $request, HairCare $product)
    {
        $hairCare = HairCare::first();
        $category_id = $hairCare->category_id;
        if(Request::isMethod('post'))
        {      
            if(empty(Request::all()))
            {
                $product = HairCare::orderBy('created_at')->get();
                return view('product.product(list)')->with('product', $product);
            }
            $product = HairCare::where(function($query)
            {
                $type1 = Request::has('type1') ? Request::get('type1') : null;
                $type2 = Request::has('type2') ? Request::get('type2') : null;
                $country1 = Request::has('country1') ? Request::get('country1') : null;
                $country2 = Request::has('country2') ? Request::get('country2') : null;
                $country3 = Request::has('country3') ? Request::get('country3') : null;
                $brand1 = Request::has('brand1') ? Request::get('brand1') : null;
                $brand2 = Request::has('brand2') ? Request::get('brand2') : null;
                $brand3 = Request::has('brand3') ? Request::get('brand3') : null;
                $brand4 = Request::has('brand4') ? Request::get('brand4') : null;
                $brand5 = Request::has('brand5') ? Request::get('brand5') : null;
                $type_of_hair1 = Request::has('type_of_hair1') ? Request::get('type_of_hair1') : null;
                $type_of_hair2 = Request::has('type_of_hair2') ? Request::get('type_of_hair2') : null;
                $type_of_hair3 = Request::has('type_of_hair3') ? Request::get('type_of_hair3') : null;
                $type_of_hair4 = Request::has('type_of_hair4') ? Request::get('type_of_hair4') : null;
                $type_of_hair5 = Request::has('type_of_hair5') ? Request::get('type_of_hair5') : null;
                $product_type1 = Request::has('product_type1') ? Request::get('product_type1') : null;
                $product_type2 = Request::has('product_type2') ? Request::get('product_type2') : null;
                $product_type3 = Request::has('product_type3') ? Request::get('product_type3') : null;
                $product_type4 = Request::has('product_type4') ? Request::get('product_type4') : null;
                $product_type5 = Request::has('product_type5') ? Request::get('product_type5') : null;
                $product_type6 = Request::has('product_type6') ? Request::get('product_type6') : null;
                // $tablet_f = Input::has('tablet_f') ? Input::get('tablet_f', 'tablet_f') : null;
                $min_price = Request::has('min-price') ? Request::get('min-price') : 0;
                $max_price = Request::has('max-price') ? Request::get('max-price') : 1000;

                $query->where('type_of_care', '=', $type1)
                    ->orWhere('type_of_care', '=', $type2)
                    ->orWhere('country', '=', $country1)
                    ->orWhere('country', '=', $country2)
                    ->orWhere('country', '=', $country3)
                    ->orWhere('brand', '=', $brand1)
                    ->orWhere('brand', '=', $brand2)
                    ->orWhere('brand', '=', $brand3)
                    ->orWhere('brand', '=', $brand4)
                    ->orWhere('brand', '=', $brand5)
                    ->orWhere('type_of_hair', '=', $type_of_hair1)
                    ->orWhere('type_of_hair', '=', $type_of_hair2)
                    ->orWhere('type_of_hair', '=', $type_of_hair3)
                    ->orWhere('type_of_hair', '=', $type_of_hair4)
                    ->orWhere('type_of_hair', '=', $type_of_hair5)
                    ->orWhere('product_type', '=', $product_type1)
                    ->orWhere('product_type', '=', $product_type2)
                    ->orWhere('product_type', '=', $product_type3)
                    ->orWhere('product_type', '=', $product_type4)
                    ->orWhere('product_type', '=', $product_type5)
                    ->orWhere('product_type', '=', $product_type6)
                    ->orWhereBetween('price', [$min_price, $max_price]);
            })->get();
            
            return view('product.product(list)')->with('product', $product)->with('category_id', $category_id);
        }
        return view('product.product')->with('product', $product)->with('category_id', $category_id);
    }


    public static function getCart(){
        if(!Session::has ('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $totalPrice = 0;
        if (count($cart->items)){
            foreach ($cart->items as $product){
                $totalPrice += $product['price'];
            }

        }
        return view('cart', ['products'=> $cart->items, 'totalPrice'=>$totalPrice]);
    }

    public static function getAddToCart(HttpReq $request, $category_id, $slug){
        if($category_id == 1)
        {
            $product = HairCare::where('slug', '=', $slug)->first();
        }
        if($category_id == 3)
        {
            $product = Collagen::where('slug', '=', $slug)->first();
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->slug);
        
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public static function getDeleteToCart(HttpReq $request, $category_id, $slug){
        if($category_id == 1)
        {
            $product = HairCare::where('slug', '=', $slug)->first();
        }
        if($category_id == 3)
        {
            $product = Collagen::where('slug', '=', $slug)->first();
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($product, $product->slug);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    public static function getRemoveItem($category_id, $slug){
        if($category_id == 1)
        {
            $product = HairCare::where('slug', '=', $slug)->first();
        }
        if($category_id == 3)
        {
            $product = Collagen::where('slug', '=', $slug)->first();
        }
        $id = $product->id;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);
        return redirect()->back();
    }
}
