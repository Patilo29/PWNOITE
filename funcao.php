<?php
function ImprimirQuebra(){

echo "<br>";
echo "<br>";
echo "<br>";

}
function ImprimirTexto($texto){

    echo $texto;
}

$meuTexto = "Aqui vai uma string de qualquer tipo de dados"."32";
ImprimirTexto ("Fernando");
ImprimirQuebra();
ImprimirTexto($meuTexto);
#ImprimirTexto();
ImprimirQuebra();

function Adicao ($numero1, $numero2){

  return  $numero1 + $numero2;
  
}


function Subtracao ($numero1, $numero2){

    return  $numero1 - $numero2;
    
  }

  function multiplicacao ($numero1, $numero2){

    return $numero1 * $numero2;
    
  }

  function Divisao ($numero1, $numero2){

    return $numero1 / $numero2;
    
  }
  
function Media ( $numero1, $numero2){

    return Adicao($numero1,$numero2)/2;

  }

  Adicao(12,8);
  Subtracao(12,8);
  Multiplicacao(12,8);
  Divisao(12,8);
$media = Media(8,9) ;
ImprimirTexto ( Media(8,9));
ImprimirTexto (Adicao(5432,4567));


/*
echo "Fernando";
ImprimirQuebra();
echo "Professor";
ImprimirQuebra();
ImprimirQuebra();
ImprimirQuebra();
ImprimirQuebra();
ImprimirQuebra();
*/
?>