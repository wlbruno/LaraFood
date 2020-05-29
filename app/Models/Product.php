<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use TenantTrait;

    protected $filable = ['title', 'flag', 'price', 'description', 'image'];


    public function categories()
    {
    	$this->belongsToMany(category::class);
    }
}
