<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\S3;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        $path = S3::upload($request->image);
        Image::create(['path' => $path]);

        return response()->json(['res' => 'ok']);
    }
}
