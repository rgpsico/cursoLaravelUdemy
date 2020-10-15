<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('produtos')
       ->insert(['nome'=>'Camiseta Polo' ,
       	          'preco'=>100,
       	           'estoque'=>4,
       	          'categoria_id'=>1
       	      ]);



            DB::table('produtos')
       ->insert(['nome'=>'Calça Jeans' ,
       	          'preco'=>100,
       	          'estoque'=>4,
       	          'categoria_id'=>2
       	      ]);




        DB::table('produtos')
       ->insert(['nome'=>'Pc Games' ,
       	          'preco'=>2000,
       	          'estoque'=>3,
       	          'categoria_id'=>6
       	      ]);



        DB::table('produtos')
       ->insert(['nome'=>'Perfume' ,
       	          'preco'=>200,
       	          'estoque'=>3,
       	          'categoria_id'=>4
       	      ]);


       DB::table('produtos')
       ->insert(['nome'=>'Guarda Roupa' ,
       	          'preco'=>2000,
       	          'estoque'=>3,
       	          'categoria_id'=>3
       	      ]);


        
        
    }
}
