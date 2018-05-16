<?php

namespace App\Repositories;

use App\Warehouses;
use Illuminate\Http\Request;
use App\ImageUploader;


class EloquentWarehouseRepository
{
    use ImageUploader;

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function create(Request $request)
    {

        $fileName = ($request->hasFile('logo'))? self::upload($request) : 0;

        $data = [
            'title' => $request->title,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->website
        ];

        Warehouses::create($data);

        return;

    }
}