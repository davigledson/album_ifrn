<?php 
$localhost = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'album';
$conexao = new mysqli($localhost,$usuario,$senha,$banco);

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


var_dump($dados);
var_dump($_FILES['arquivo']);
// function salvar(){
//     
//     $query ="INSERT INTO fotos (`:nome`, `caminho`)  VALUES (:nome, caminho)" ;
// }
?>