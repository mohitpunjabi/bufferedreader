<?php
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


function img_save(UploadedFile $file) {
    return Image::make($file)->save('img/' . str_random(15) . '.jpg')->basename;
}