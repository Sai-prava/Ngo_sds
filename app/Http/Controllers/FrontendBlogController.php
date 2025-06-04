<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function blogfrontend()
    {
        return view('web.blog');
    }
}
