<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableApiController extends Controller
{
    protected $categoryService;

    public function __construct(TableService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function tablesByTenant(TenantFormRequest $request)
    {
        // if (!$request->token_company) {
        //    return response()->json(['message' => 'Token não foi encontrado'], 404);
        //}=

        $categories = $this->categoryService->getCategoriesByUuid($request->token_company);

       return TableResource::collection($categories);
    }

    public function show(TenantFormRequest $request, $url)
    {
        if (!$category = $this->categoryService->getTableByUrl($url)) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        return new TableResource($category);
    }
}
