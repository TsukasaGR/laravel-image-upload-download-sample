<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class S3
{
    /**
     * @param UploadedFile $file
     * @return mixed
     */
    public static function upload(UploadedFile $file)
    {
        $s3 =  Storage::disk('s3');
        $path = $s3->putFile('images/users/cap', $file, 'public');
        $url = Storage::disk('s3')->url($path);

        return $url;
    }
}
