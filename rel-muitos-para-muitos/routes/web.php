<?php

use App\Projeto;
use App\Desenvolvedor;
use App\Alocacao;

Route::get('/desenvolvedor_projetos',function(){
            $desenvolvedores = Desenvolvedor::with('projetos')->get();
	foreach ($desenvolvedores as $d) {
		echo "<p><b>Nome do Desenvolvedor:</b> " . $d->nome ." </p>";
		echo "<p>Cargo ".$d->cargo ." </p>";
           if(count($d->projetos) > 0){
	    echo "Projetos: <br>";
		echo "<ul>";
		foreach($d->projetos as $p){
        echo "<li>";
        echo " Nome " . $p->nome . "|";
        echo " Horas " . $p->estimativa_horas."|";  
         echo " Horas trabalhadas " .$p->pivot->horas_semanais."|";         
		echo "</li> ";
		
		}
		echo "<hr>";
	}
echo "</ul>";
	//return $desenvolvedores->toJson();
}
});


Route::get('/projeto_desenvolvedores',function(){
   $projetos = Projeto::with('desenvolvedores')->get();
   
   foreach ($projetos as $proj){
   	echo "<p> Nome do Projeto:".$proj->nome."</p>";
    echo "<p> Estimativa:".$proj->estimativa_horas."</p>";

   if(count($proj->desenvolvedores) > 0) {
echo "<b>Desenvolvedores:</b><br>";
echo "</ul>";
foreach ($proj->desenvolvedores as $d) {
	echo "<li>";
	echo "<b>Nome do Desenvolvedor</b>:". $d->nome . "|";
	echo "Cargo:". $d->cargo . "|";
	echo "Horas trabalhadas: ". $d->pivot->horas_semanais . "|";
	echo "</li>";
}
echo "</ul>";
   }
	echo "<hr>";

}
   //return $projetos->toJson();
});

Route::get('/alocar', function(){
	$proj = Projeto::find(3);
	if(isset($proj)){
		//$proj->desenvolvedores()->attach(1,['horas_semanais'=> 200]);
$proj->desenvolvedores()->attach([ 
	1 => ['horas_semanais'=> 21],
    1=> ['horas_semanais'=> 30],
	
	]);
}

});


Route::get('/desalocar', function(){
	$proj = Projeto::find(1);
	if(isset($proj)){
		//$proj->desenvolvedores()->attach(1,['horas_semanais'=> 200]);
$proj->desenvolvedores()->detach([3]);
}

});