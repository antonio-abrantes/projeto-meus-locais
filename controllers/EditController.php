<?php 

include_once '../models/Conexao.php';
include_once '../models/Manager.php';

$manager = new Manager();

$updadeLocal = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)){
  $manager->updateLocal('locais', $updadeLocal, $id);
  header("Location: ../index.php?local_atualizado");
}

?>