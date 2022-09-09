<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetimageController extends Controller
{
    function upload($get){

        $img = generateName($get->getClientOriginalName());
        $get->move(public_path(env('BLOG_IMAGE_PATH')) , $img);
        return ['img_name' => $img];

    }
}
