<?php 

include_once '../models/Conexao.php';
include_once '../models/Manager.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
  $manager->deleteLocal("locais", $id);
  header("Location: ../index.php?local_deletado");
}

?>