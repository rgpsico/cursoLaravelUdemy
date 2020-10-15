<?php

use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome'=>'Bernado Silva',
        	'estimativa_horas'=>200]);

        DB::table('projetos')->insert(['nome'=>'Sistema de Biblioteca','estimativa_horas'=>300]);

        DB::table('projetos')->insert(['nome'=>'Sistema de Vendas','estimativa_horas'=>200]);
    }
}
