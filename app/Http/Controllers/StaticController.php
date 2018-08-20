<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{

    /**
     * Get the Static Pages index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $pages = []; // todo

        return view('static.index')->with('pages', $pages);
    }

    /**
     * Get a static page.
     *
     * @param string|null $pagePath
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get(string $pagePath) {
        $view = view('static.'.str_replace('/', '.', strtolower($pagePath)));

        return $view ? $view : abort(404);
    }
}
