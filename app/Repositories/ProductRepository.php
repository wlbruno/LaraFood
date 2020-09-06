<?php

namespace App\Repositories;

use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Support\Facedes\DB;

class ProductRepository implements ProductRepositoryInterface
{
    protected $table;

    public function __construct()
    {
        $this->table = 'products';
    }

    public function getproductByTenantId(int $idTenant)
    {
        return DB::table($this->table)
                    ->where('tenant_id', $idTenant)
                    ->get();
    }
}