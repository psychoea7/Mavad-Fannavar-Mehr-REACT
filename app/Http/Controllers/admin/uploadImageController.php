<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function upload($primary, $images){
        $namefile = generateName($primary->getClientOriginalName());
        $primary->move(public_path(env('PRODUCT_IMAGE_PATH')) , $namefile);

        $ArrayImages = [];

        foreach ($images as $image) {
            $generateName = generateName($image->getClientOriginalName());
            $image->move(public_path(env('PRODUCT_IMAGE_PATH')) , $generateName);

            array_push($ArrayImages , $generateName);
        }

        return ['primary' => $namefile , 'images' => $ArrayImages];
    }
}
