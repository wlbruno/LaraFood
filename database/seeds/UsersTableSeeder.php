<?php

use App\Models\User;
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
        User::create([
        	'name' => 'Willian Bruno',
        	'email' => 'test@test.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
