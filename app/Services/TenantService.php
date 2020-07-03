<?php

namespace App\Services;


use Illuminate\Support\Str;
use App\Models\Plan;
use App\Repositories\Contracts\TenantRepositoryInterface;

class TenantService
{
	private $plan, $data = [];
	private $repository;

	public function __construct(TenantRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function getAllTenants()
	{
		return $this->repository->getAllTenants();
	}

	public function make(Plan $plan, array $data)
	{
		$this->plan =  $plan;
		$this->data = $data;


		$tenant = $this->storeTenant();

        $user = $this->storeUser($tenant);

        return   $user;
	}

	public function storeTenant()
	{
		$data = $this->data;

		return $this->plan->tenants()->create([
            'cnpj'  => $data['cnpj'],
            'name'  => $data['empresa'],
            
            'email' => $data['email'],

            'subscription' => now(),
            'expires_at' => now()->addDays(7),
        ]);
	}

	public function storeUser($tenant)
	{
		$data = $this->data;

		$user = $tenant->users()->create([
            'name' => $data['name'],
            'email' =>  $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return $user;
	}
}