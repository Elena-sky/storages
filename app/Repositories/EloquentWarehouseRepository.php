<?php

namespace App\Repositories;

use App\Warehouses;
use Illuminate\Http\Request;


class EloquentWarehouseRepository extends LogoRepository
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function create(Request $request)
    {

        $fileName = ($request->hasFile('logo'))? parent::upload($request) : 0;

        $data = [
            'title' => $request->title,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->website
        ];

        Warehouses::create($data);

        return;

    }


    /**
     * Get all Warehouses
     *
     * @return mixed
     */
    public function all()
    {
        return Warehouses::paginate(20);
    }


    /**
     * Get the Warehouse for editing.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Warehouses::findOrFail($id);
    }


    /**
     * Get URL logo
     *
     * @param $name
     * @return null
     */
    public function getLogo($name)
    {
        return parent::getUrlLogo($name);
    }


    /**
     * Update the Warehouse in storage.
     *
     * @param $id
     * @param $request
     */
    public function updateWarehouse($id, $request)
    {
        $data = self::show($id);

        if($request->hasFile('logo')){

            $oldLogo = $data['logo'];
            $fileName = parent::updateLogo($request, $oldLogo);

        } else {

            $fileName = $data['logo'];

        }

        $data = [
            'title' => $request->title,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->website
        ];

        $item = Warehouses::findOrFail($id);
        $item->update($data);

        return;
    }


    /**
     * Delete the Warehouses
     *
     * @param $id
     */
    public function destroy($id)
    {
        Warehouses::destroy($id);
    }


}