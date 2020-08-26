<?php

namespace App;

use File;
use Storage;
use Image;

class UploadImage 
{
    /**
     * This function is for uploading a logo in the storage folder
     * and it will resize the photo with a new dimension of 100 x 100
     * 
     */

    public static function upload($request, $fileName, $default="")
    {
        $name = "";
        $photo = $request->logo;

        if($request->hasFile($fileName)) {
            $extension = $photo->getClientOriginalExtension();
            $name = rand(11111, 99999).".".date('Y-m-d').".".time().".".$extension;
            Image::make($photo)->resize(100, 100)->save( storage_path('/app/public/logo/' . $name) );
            $name = $name;
        } else {
            $name = $default;
        }
        return $name;
    }
}
