<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentWarehouseRepository as rWarehouse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWarehouse;
use App\Repositories\LangRepository as rLang;


class WarehouseController extends Controller
{
    private $rWarehouse;
    private $rLang;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(rWarehouse $rWarehouse, rLang $rLang)
    {
        $this->rWarehouse = $rWarehouse;
        $this->rLang = $rLang;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = $this->rLang->warehousesList();

        $warehouses = $this->rWarehouse->all();

        return view('warehouses.list', compact('warehouses', 'lang'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = $this->rLang->warehousesCreate();

        return view('warehouses.create', compact('lang'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarehouse $request)
    {

        $this->rWarehouse->create($request);

        //Display a successful message
        return redirect()->route('warehouses.create')
            ->with('status', 'Warehouse - ' . $request['title'] . ' stored');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = $this->rLang->warehousesEdit();

        $warehouse = $this->rWarehouse->show($id);

        $urlLogo = ($warehouse->logo)? $this->rWarehouse->getLogo($warehouse->logo) : null;

        return view('warehouses.edit', compact('warehouse', 'urlLogo', 'lang'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWarehouse $request, $id)
    {
        $this->rWarehouse->updateWarehouse($id, $request);

        //Display a successful message
        return redirect()->route('warehouses.edit', $id)
            ->with('status', 'Warehouse - ' . $request['title'] . ' updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rWarehouse->destroy($id);
    }
}
