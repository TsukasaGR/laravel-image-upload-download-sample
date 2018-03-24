<?php

namespace App\Http\Controllers;

use App\Image;

class DownloadController extends Controller
{
    public function index()
    {
        return response()->json(['images' => Image::latest('id')->get()]);
    }
}
