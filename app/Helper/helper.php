<?php

use Intervention\Image\Facades\Image;

function image_upload ($image,$directory,$width,$height){
    $imageName = uniqid().$image->getClientOriginalName();
    $imageUrl = $directory.$imageName;
    Image::make($image)->resize($width, $height)->save($imageUrl);
    return $imageUrl;
}

function file_upload ($file,$directory){
    $fileName = uniqid().$file->getClientOriginalName();
    $fileUrl = $directory.$fileName;
    $file -> move($directory,$fileName);
    return $fileUrl;
}
