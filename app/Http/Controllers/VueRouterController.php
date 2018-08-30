<?php

namespace App\Http\Controllers;

class VueRouterController extends Controller
{
    public function dataItems() {
        return view('data-items');
    }

    public function notes() {
        return view('notes');
    }

    public function tasks() {
        return view('tasks');
    }
}
