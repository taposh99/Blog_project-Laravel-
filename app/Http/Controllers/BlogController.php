<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog({
        return view('admin.blog.add-blog');
    }
}
