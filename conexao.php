<?php 
namespace conexao;
use mysqli;
use Verot\Upload\Upload;

require_once 'vendor/autoload.php';

$localhost = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'album';
$conexao = new mysqli($localhost,$usuario,$senha,$banco);

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


var_dump($dados);
var_dump($_FILES['arquivo']);


if(!empty($_FILES['arquivo'])){
    $upload = (new Upload($_FILES['arquivo']));
if($upload->uploaded){
    $upload->image_resize = true;
    $upload->image_x = 400;
    $upload->image_y = 400;
    $upload->process('imgs/');
}


}

// function salvar(){
//     
//     $query ="INSERT INTO fotos (`:nome`, `caminho`)  VALUES (:nome, caminho)" ;
// }
?>