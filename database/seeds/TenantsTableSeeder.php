<?php

use App\Models\{
    Plan,
    Tenant
};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $plan = Plan::first();

        $plan->tenants()->create([
        	'cnpj' => '1231231233',
        	'name' => 'WlbnTI',
        	'url' => 'wlbnti',
        	'email'=> 'wlbnti@wlbn.com',
        ]);
    }
}
