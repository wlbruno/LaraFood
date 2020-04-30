<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *s
     * @return void
     */
    public function run()
    {
           $this->call([
            PlansTableSeeder::class,
            TenantsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
     }

}
