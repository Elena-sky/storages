<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EloquentProductRepository as rProduct;
use App\Repositories\EloquentWarehouseRepository as rWarehouse;
use App\Http\Requests\StoreProduct;
use App\Repositories\LangRepository as rLang;


class ProductController extends Controller
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
        $this->rProduct = $rProduct;
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
        $lang = $this->rLang->productsList();

        $products = $this->rProduct->all();

        $warehouses = $this->rWarehouse->selectWarehouses();

        return view('products.list', compact('products', 'warehouses', 'lang'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = $this->rLang->productsCreate();

        $warehouses = $this->rWarehouse->selectWarehouses();

        return view('products.create', compact('warehouses', 'lang'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $this->rProduct->create($request);

        //Display a successful message
        return redirect()->route('product.create')
            ->with('status', 'Product - ' . $request['title'] . ' stored');
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
        $lang = $this->rLang->productsEdit();

        $product = $this->rProduct->show($id);

        $warehouses = $this->rWarehouse->selectWarehouses();

        return view('products.edit', compact('product', 'warehouses', 'lang'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
    {
        $this->rProduct->updateProduct($id, $request);

        //Display a successful message
        return redirect()->route('product.edit', $id)
            ->with('status', 'Product - ' . $request['title'] . ' updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rProduct->destroy($id);
    }

}
