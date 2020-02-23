<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  if($name == '' or $surname == '') {
    echo 'You don`t write name or surname';
    exit();
  }

   require 'configDB.php';

  $sql = 'INSERT INTO users (name, surname) VALUES(:name, :surname)';
  $query_name = $pdo->prepare($sql);
  $query_name->execute(array('name' => $name, 'surname' => $surname));

  header('Location: /admin.php');
