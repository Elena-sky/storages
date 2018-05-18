<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EloquentProductRepository as rProduct;
use App\Repositories\EloquentWarehouseRepository as rWarehouse;

class IndexController extends Controller
{
    private $rProduct;
    private $rWarehouse;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(rProduct $rProduct, rWarehouse $rWarehouse)
    {
        $this->middleware('auth');
        $this->rProduct = $rProduct;
        $this->rWarehouse = $rWarehouse;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsCount = $this->rProduct->ProductCount();

        $warehousesCount = $this->rWarehouse->WarehouseCount();

        return view('dashboard', compact('productsCount', 'warehousesCount'));
    }
}
