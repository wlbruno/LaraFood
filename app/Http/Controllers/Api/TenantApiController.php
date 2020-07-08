<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TenantResource;
use Illuminate\Http\Request;
use App\Services\TenantService;

class TenantApiController extends Controller
{
    protected $tenantService;

    public function __construct(TenantService $tenantService)
    {
        $this->tenantService = $tenantService;
    }

    public function index(Request $request)
    {
        $per_page = (int) $request->get('per_page', 15);

        $tenants = $this->tenantService->getAllTenants($per_page);

        return TenantResource::collection($tenants);
    }

    public function show($uuid)
    {
       if (!$tenant = $this->tenantService->getTenantByUuid($uuid)) {
            return response()->json(['message' => 'Empresa não encontrada'], 404);
       } 

        return new TenantResource($tenant);
    }
}
