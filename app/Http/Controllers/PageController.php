<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Footer;
use App\PageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function index()
    {
        $page_content = PageContent::find(1);
        return view('index')->with('page_content', $page_content);
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
