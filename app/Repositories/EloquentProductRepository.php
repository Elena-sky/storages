<?php

namespace App\Repositories;

use App\Products;
use Illuminate\Http\Request;

class EloquentProductRepository
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function create(Request $request)
    {

        $data = [
            'title' => $request->title,
            'sku' => $request->sku,
            'warehouses_id' => $request->warehouse_id,
            'description' => $request->description
        ];

        Products::create($data);

        return;

    }


    /**
     * Get all Products
     *
     * @return mixed
     */
    public function all()
    {
        return Products::paginate(20);
    }


    /**
     * Get the Product for editing.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Products::findOrFail($id);
    }


    /**
     * Update the Product in storage.
     *
     * @param $id
     * @param $request
     */
    public function updateProduct($id, $request)
    {
        $data = [
            'title' => $request->title,
            'sku' => $request->sku,
            'warehouses_id' => $request->warehouse_id,
            'description' => $request->description
        ];

        $item = Products::findOrFail($id);
        $item->update($data);

        return;
    }


    /**
     * Delete the Product
     *
     * @param $id
     */
    public function destroy($id)
    {
        Products::destroy($id);
    }

}