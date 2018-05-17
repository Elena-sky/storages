<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class LogoRepository
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
            $logo = Storage::disk('public')->put('logo', $img);
            return $logo;
        }

    }


    /**
     * Get URL for the image Logo
     *
     * @param $name
     * @return null
     */
    public static function getUrlLogo($name)
    {
        return ($name)? Storage::url($name) : null;
    }


    /**
     * Remove old Logo and save new Logo
     *
     * @param $request
     * @param $oldLogo
     * @return mixed
     */
    public function updateLogo($request, $oldLogo)
    {
        self::destroyOldLogo($oldLogo);

        return self::upload($request);
    }


    /**
     * Remove old logo from storage / app / public / logo
     *
     * @param $oldLogo
     */
    public function destroyOldLogo($oldLogo)
    {
        Storage::disk('public')->delete($oldLogo);

        return;
    }
}
