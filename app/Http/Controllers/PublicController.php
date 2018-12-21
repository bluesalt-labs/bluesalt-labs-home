<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function home() {
        return view('public.home');
    }

    public function about() {
        return view('public.about');
    }

    public function contact() {
        return view('public.contact');
    }


    /* Blog Routes */

    public function blogIndex() {
        return view('public.blog.index');
    }
}