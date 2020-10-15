<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('desenvolvedores')->insert(['nome'=>'Bernado Silva','cargo'=>'Analista Pleno']);

        DB::table('desenvolvedores')->insert(['nome'=>'Bernado Silva','cargo'=>'Analista Pleno']);

        DB::table('desenvolvedores')->insert(['nome'=>'Bernado Silva','cargo'=>'Analista Pleno']);
    }
    
}
