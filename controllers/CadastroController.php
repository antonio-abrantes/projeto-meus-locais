<?php 

include_once '../models/Conexao.php';
include_once '../models/Manager.php';

$manager = new Manager();

$data = $_POST;

var_dump($data);

if(isset($data) && !empty($data)){
  $manager->insertLocal("locais", $data);
  header("Location: ../index.php?local_add_sucesso");
}

?>