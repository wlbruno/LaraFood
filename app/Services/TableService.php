<?php

namespace App\Services;

use App\Repositories\Contracts\TableRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class TableService
{
    protected $tenantRepository, $table;

    public function __construct(
        TableRepositoryInterface $tenantRepository,
        CategoryRepositoryInterface $table
    ) {
        $this->table$table = $table;
        $this->tenantRepository = $tenantRepository;
    }

    public function getTablesByUuid(string $uuid)
    {
        $tenant = $this->tenantRepository->getTenantByUuid($uuid);

        return $this->table$table->getTablesByTenantId($tenant->id);
    }

    public function getTableByUrl(string $url)
    {
        return $this->table$table->getTableByUrl($url);
    }
}