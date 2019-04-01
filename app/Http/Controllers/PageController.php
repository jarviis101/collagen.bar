<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Category;
use App\HomePageTitle;
use App\Footer;
use App\News;
use App\Collagen;
use App\HairCare;
use App\MediaProduct;
use App\Postq;
use App\Product;
use App\HomePageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function index()
    {
        $home_page_title = HomePageTitle::orderBy('created_at')->get();
        $category = Category::orderBy('created_at')->get();
        $page_content = HomePageContent::find(1);
        return view('index')->with('home_page_title', $home_page_title)->with('page_content', $page_content)->with('category', $category);
    }


    public static function newsList()
    {
        $news = News::orderBy('created_at')->get();
        return view('news.news')->with('news', $news);
    }
    public static function newsInner($slug)
    {
        $news = News::where('slug', '=', $slug)->get();
        return view('news.innerNews')->with('news', $news);
    }

    public static function postList()
    {
        $post = Postq::orderBy('created_at')->get();
        return view('post.post')->with('post', $post);
    }
    public static function postInner($slug)
    {
        $post = Postq::where('slug', '=', $slug)->get();
        return view('post.innerPost')->with('post', $post);
    }

    public static function product()
    {
        $product = Product::orderBy('created_at')->get();
        $name = "Все товары";
        $category_id = 4;
        return view('product.product')->with('product', $product)->with('name', $name)->with('category_id', $category_id);
    }

    public static function category($id)
    {
        if($id == 1)
        {
            $product = HairCare::where('category_id', '=', $id)->get();
        }
        if($id == 3)
        {
            $product = Collagen::where('category_id', '=', $id)->get();
        }
        $category = Category::where('category_id', $id)->first();
        $name = $category->name;
        $category_id = $category->category_id;
        return view('product.product')->with('product', $product)->with('name', $name)->with('category_id', $category_id);
    }
    
    public static function productInner($id, $slug)
    {
        if($id == 1)
        {
            $product = HairCare::where('slug', '=', $slug)->first();
        }
        if($id == 3)
        {
            $product = Collagen::where('slug', '=', $slug)->first();
        }
        $id = $product->product_id;
        $photos = MediaProduct::where('product', '=', $id)->first();
        return view('product.innerProduct')->with('product', $product)->with('photos', $photos);
    }



    public static function getContacts()
    {
        $contacts = Contact::find(1);
        return $contacts;
    }
    public static function getFooter()
    {
        $category = Category::orderBy('created_at')->get();
        $footer = Footer::find(1);
        return $footer;
    }
}
