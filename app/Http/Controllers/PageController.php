<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.home');
    }

    public function getCategory(){
        return view('page.category');
    }

    public function getDetail(){
        return view('page.product_detail');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }
}
