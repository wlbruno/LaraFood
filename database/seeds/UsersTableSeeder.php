<?php

use App\Models\{
    Tenant,
    User
};
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();
        
        $tenant->users()->create([
        	'name' => 'Willian Bruno',
        	'email' => 'test@test.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
