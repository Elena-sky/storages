<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    protected $table = 'warehouses';

    protected $fillable = ['title', 'email', 'logo', 'website', 'created_at', 'updated_at'];

}
