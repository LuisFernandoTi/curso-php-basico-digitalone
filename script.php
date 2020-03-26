<?php

$categorias = [];
$categorias[] = 'infatil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = "Luis Fernando";
$idade = 27;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    echo 'infantil';
}else if($idade >= 13 && $idade <= 18){
    echo 'adolecente';
}else{
    echo 'adulto';
}
?> 