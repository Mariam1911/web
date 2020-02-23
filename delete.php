<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute(array($id));

  header('Location: /');
?>
