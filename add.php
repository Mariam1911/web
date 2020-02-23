<?php
  $task = $_POST['task'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  if($task == '') {
    echo 'Введите само задание';
    exit();
  }

   require 'configDB.php';

  $sql = 'INSERT INTO tasks(task, quantity, price) VALUES(:task, :quantity, :price)';
  $query = $pdo->prepare($sql);
  $query->execute(array('task' => $task, 'quantity' => $quantity, 'price' => $price));

  header('Location: /admin.php');
