<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EloquentProductRepository as rProduct;
use App\Repositories\EloquentWarehouseRepository as rWarehouse;
use App\Repositories\LangRepository as rLang;

class IndexController extends Controller
{
    private $rProduct;
    private $rWarehouse;
    private $rLang;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(rProduct $rProduct, rWarehouse $rWarehouse, rLang $rLang)
    {
        $this->middleware('auth');
        $this->rProduct = $rProduct;
        $this->rWarehouse = $rWarehouse;
        $this->rLang = $rLang;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = $this->rLang->dashboard();

        $productsCount = $this->rProduct->ProductCount();

        $warehousesCount = $this->rWarehouse->WarehouseCount();

        return view('dashboard', compact('productsCount', 'warehousesCount', 'lang'));
    }
}
