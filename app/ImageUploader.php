<?php

namespace App;

use Illuminate\Support\Facades\Storage;


trait ImageUploader
{
    /**
     * Uploading image to storage/app/public/logo
     *
     * @param $request
     * @return mixed
     */
    public function upload($request)
    {
        $img = $request->file('logo');

        if ($img !== null){
            $fileName = $img->getClientOriginalName();
            Storage::disk('public')->put('logo', $img);
        }

        return $fileName;

    }
}