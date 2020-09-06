<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface 
{
    public function getproductByTenantId(int $idTenant);
}