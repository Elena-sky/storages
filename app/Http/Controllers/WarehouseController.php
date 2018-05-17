<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentWarehouseRepository as rWarehouse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWarehouse;


class WarehouseController extends Controller
{
    private $rWarehouse;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(rWarehouse $rWarehouse)
    {
        $this->rWarehouse = $rWarehouse;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = $this->rWarehouse->all();

        return view('warehouses.list', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouses.create');
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
        $warehouse = $this->rWarehouse->show($id);

        $urlLogo = ($warehouse->logo)? $this->rWarehouse->getLogo($warehouse->logo) : null;

        return view('warehouses.edit', compact('warehouse', 'urlLogo'));
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

        return;
    }
}
