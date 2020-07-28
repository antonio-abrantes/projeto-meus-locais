<?php

class Manager extends Conexao{
  
  public function insertLocal($table, $data){
    $pdo = parent::getInstance();
    $fields = implode(", ", array_keys($data));
    $values = ":".implode(", :", array_keys($data));
    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    $statement = $pdo->prepare($sql);
    foreach ($data as $key => $value) {
      $statement->bindValue(":$key", $value, PDO::PARAM_STR);
    }
    $statement->execute();
  }

  public function listLocais($table){
    $pdo = parent::getInstance();
    $sql = "SELECT * FROM $table ORDER BY nome ASC";
    $statement = $pdo->query($sql);
    $statement->execute();
    return $statement->fetchAll(); 
  }
  
  public function deleteLocal($table, $id){
    $pdo = parent::getInstance();
    $sql = "DELETE FROM $table WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute(); 
  }

  public function getLocalPorId($table, $id){
    $pdo = parent::getInstance();
    $sql = "SELECT * FROM $table WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();

    return $statement->fetchAll(); 
  }

  public function updateLocal($table, $data, $id){
    $pdo = parent::getInstance();
    $newValues = "";
    foreach ($data as $key => $value) {
      $newValues .= "$key=:$key, ";
    }
    $newValues = substr($newValues, 0, -2);
    $sql = "UPDATE $table SET $newValues WHERE id = :id";
    $statement = $pdo->prepare($sql);
    foreach ($data as $key => $value) {
      $statement->bindValue(":$key", $value, PDO::PARAM_STR);
    }
    $statement->execute();
  }

}