<?php

$idade = 17;
$numeroDePessoas = 1;

echo ("Você só pode entrar sozinho se tiver mais do que 18 anos ou, se tiver 16 aanos e acompnahado com uma pessoa maior de idade") . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos" . PHP_EOL . "Pode entrar sozinho";
}
else if ($idade >= 16 and $numeroDePessoas > 1){
    echo ("Você tem $idade anos e está acompnahda " . PHP_EOL . "Pode entrar com o acompanhante");
    }
else if ($idade >= 16 and $numeroDePessoas <=1){
     echo ("Você não pode entrar, pois tem $idade anos e não está acompanhado(a)");
}



 