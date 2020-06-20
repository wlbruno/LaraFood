<?php

use Illuminate\Database\Seeder;
use App\Models\DetailPlan;

class DetailsPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Plano Gratis
         */

        DetailPlan::create([
            'name' => 'Categorias',
             'plan_id' => 1,
        ]);

        DetailPlan::create([
            'name' => 'Produtos',
            'plan_id' => 1,
        ]);

        /**
         * Plano Padrão
         */

        DetailPlan::create([
            'name' => 'Categorias',
            'plan_id' => 2,
        ]);

        DetailPlan::create([
            'name' => 'Produtos',
            'plan_id' => 2,
        ]);

        DetailPlan::create([
            'name' => 'Pedidos',
            'plan_id' => 2,
        ]);

        /**
         * Plano Pro
        */
        
        DetailPlan::create([
            'name' => 'Categorias',
            'plan_id' => 3,
        ]);

        DetailPlan::create([
            'name' => 'Produtos',
            'plan_id' => 3,
        ]);

        DetailPlan::create([
            'name' => 'Pedidos',
            'plan_id' => 3,
        ]);

        DetailPlan::create([
            'name' => 'Mesas',
            'plan_id' => 3,
        ]);

        DetailPlan::create([
            'name' => 'Avaliações',
            'plan_id' => 3,
        ]);
    }
}
