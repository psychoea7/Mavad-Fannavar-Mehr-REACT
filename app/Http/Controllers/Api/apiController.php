<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getBlogs(){
        $blogs = Blog::all();
        return response()->json([
            'blogs' => $blogs
        ]);
    }
}
