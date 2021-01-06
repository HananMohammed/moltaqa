<?php


namespace App\Traits;

use Illuminate\Support\Facades\File;


trait ImageProcess
{
    /**
     * @param $fileRequest
     * @return string
     */
    public function upload_image($fileRequest)
    {
        $imageName = 'image'. time() . '.' . $fileRequest->getClientOriginalExtension();
        $fileRequest->storeAs('public/uploads/', $imageName );
        return $imageName ;
    }
}
