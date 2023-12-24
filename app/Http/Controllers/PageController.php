<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        $course = course::get();

        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}",[
                'course' => $course,
            ]);
        }

        return abort(404);
    }
}
