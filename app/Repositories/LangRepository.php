<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Lang;

class LangRepository
{
    /**
     * Translation for view dashboard
     *
     * @return array
     */
    public function dashboard()
    {
        $title = trans('titles.info_box');
        $warehouse = Lang::choice('tables.warehouse', 2);
        $products = trans('tables.products');
        $resources = trans('tables.resources');
        $dashboard = trans('titles.dashboard');

        return $lang = [
            'title' => $title,
            'warehouse' => $warehouse,
            'products' => $products,
            'resources' => $resources,
            'dashboard' => $dashboard,
        ];

    }

    /**
     * Translation for view warehouses.list
     *
     * @return array
     */
    public function warehousesList()
    {
        $list = trans('tables.list_of_warehouses');
        $title = trans('tables.title');
        $email = trans('tables.email');
        $logo = trans('tables.logo');
        $website = trans('tables.website');
        $create = Lang::choice('tables.create', 2);
        $edit = trans('tables.edit');
        $delete = trans('tables.delete');
        $dashboard = trans('titles.dashboard');

        return $lang = [
            'list' => $list,
            'title' => $title,
            'email' => $email,
            'logo' => $logo,
            'website' => $website,
            'edit' => $edit,
            'delete' => $delete,
            'dashboard' => $dashboard,
            'create' => $create,
        ];
    }

    /**
     * Translation for view products.list
     *
     * @return array
     */
    public function productsList()
    {
        $dashboard = trans('titles.dashboard');
        $list = trans('tables.list_of_products');
        $title = trans('tables.title');
        $sku = trans('tables.sku');
        $warehouse = Lang::choice('tables.warehouse', 1);
        $description = trans('tables.description');
        $create = Lang::choice('tables.create', 2);
        $edit = trans('tables.edit');
        $delete = trans('tables.delete');

        return $lang = [
            'dashboard' => $dashboard,
            'list' => $list,
            'title' => $title,
            'sku' => $sku,
            'warehouse' => $warehouse,
            'description' => $description,
            'edit' => $edit,
            'delete' => $delete,
            'create' => $create,
        ];
    }

    /**
     * Translation for view products.create
     *
     * @return array
     */
    public function productsCreate()
    {
        $dashboard = trans('titles.dashboard');
        $new_product = trans('form.new_product');
        $title = trans('tables.title');
        $sku = trans('tables.sku');
        $warehouse = Lang::choice('tables.warehouse', 1);
        $description = trans('tables.description');
        $create = Lang::choice('tables.create', 1);

        return $lang = [
            'dashboard' => $dashboard,
            'new_product' => $new_product,
            'title' => $title,
            'sku' => $sku,
            'warehouse' => $warehouse,
            'description' => $description,
            'create' => $create,
        ];

    }

    /**
     * Translation for view warehouses.create
     *
     * @return array
     */
    public function warehousesCreate()
    {
        $new_warehouse = trans('form.new_warehouse');
        $title = trans('tables.title');
        $email = trans('tables.email');
        $logo = trans('tables.logo');
        $website = trans('tables.website');
        $create = Lang::choice('tables.create', 1);
        $dashboard = trans('titles.dashboard');

        return $lang = [
            'new_warehouse' =>$new_warehouse,
            'title' => $title,
            'email' => $email,
            'logo' => $logo,
            'website' => $website,
            'create' => $create,
            'dashboard' => $dashboard,
        ];
    }

    /**
     * Translation for view warehouses.edit
     *
     * @return array
     */
    public function warehousesEdit()
    {
        $edit_warehouse = trans('form.edit_warehouse');
        $title = trans('tables.title');
        $email = trans('tables.email');
        $website = trans('tables.website');
        $current_logo = trans('form.current_logo');
        $newlogo = trans('form.new_logo');
        $edit = trans('tables.edit');
        $dashboard = trans('titles.dashboard');

        return $lang = [
            'edit_warehouse' => $edit_warehouse,
            'title' => $title,
            'email' => $email,
            'website' => $website,
            'current_logo' => $current_logo,
            'newlogo' => $newlogo,
            'edit' => $edit,
            'dashboard' => $dashboard,
        ];
    }


    /**
     * Translation for view products.edit
     *
     * @return array
     */
    public function productsEdit()
    {
        $dashboard = trans('titles.dashboard');
        $edit_product = trans('form.edit_product');
        $title = trans('tables.title');
        $sku = trans('tables.sku');
        $warehouse = Lang::choice('tables.warehouse', 1);
        $description = trans('tables.description');
        $edit = trans('tables.edit');

        return $lang = [
            'dashboard' => $dashboard,
            'edit_product' => $edit_product,
            'title' => $title,
            'sku' => $sku,
            'warehouse' => $warehouse,
            'description' => $description,
            'edit' => $edit,
        ];

    }


}
