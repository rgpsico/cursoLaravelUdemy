<?php

use App\Categoria;
use App\Produto;


Route::get('/categorias', function () {
     $cat = Categoria::all();
     if(count($cat)===0){
     	echo "Não tem categorias cadastradas";
     }else{

     	foreach ($cat as $c) {
     		 echo'<p>'.$c->id. '</p>';
     	     echo'<p>'.$c->nome.'</p>';

     	}
     }
});


Route::get('/Produto', function () {
     $prod = produto::all();
     if(count($prod)===0){
     	echo "Não tem produto cadastradas";
     }else{

echo "<table border='1' width='50%' style='text-align:center;'>";
echo "<thead>
<tr>
<td>Nome</td>
<td>Estoque</td>
<td>Categoria</td>
<td>preco</td>
<tr>
</thead>
";
     	foreach ($prod as $p) {
     		 echo "<tr>";     		
     	     echo'<td>'.$p->nome.'</td>';
             echo'<td>'.$p->estoque.'</td>';
             echo'<td>'.$p->categoria->nome.'</td>';
             echo'<td>'.$p->preco.'</td>';
             echo "</tr>";
     	}
     }
});
