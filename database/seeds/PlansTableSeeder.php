<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Plan::create([
          	'name' => 'Grátis',
          	 'url' => 'gratis',
          	  'price' => 0.00,
          	   'description' => 'Plano Grátis',
        ]);

        Plan::create([
            'name' => 'Padrão',
             'url' => 'padrao',
              'price' => 299.99,
               'description' => 'Plano Padrão',
      ]);

      Plan::create([
        'name' => 'Pro',
         'url' => 'prp',
          'price' => 499.99,
           'description' => 'Plano Pro',
  ]);
    }
}
