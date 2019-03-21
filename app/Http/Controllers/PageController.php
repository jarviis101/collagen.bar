<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Category;
use App\HomePageTitle;
use App\Footer;
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
    public static function getContacts()
    {
        $contacts = Contact::find(1);
        return $contacts;
    }
    public static function getFooter()
    {
        $footer = Footer::find(1);
        return $footer;
    }
}
