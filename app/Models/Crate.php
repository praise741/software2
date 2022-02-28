<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crate
 *
 * @property $id
 * @property $name
 * @property $quantity
 * @property $costprice
 * @property $sellingprice
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crate extends Model
{
    
    static $rules = [
		'name' => 'required',
		'quantity' => 'required',
		'costprice' => 'required',
		'sellingprice' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','quantity','costprice','sellingprice'];



}
