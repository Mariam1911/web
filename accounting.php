<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список дел</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Stock</h1>


    <?php
      require 'configDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`  DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.' '. $row->quantity.'</b><a href="/add_bag.php?id='.$row->id.'"></a></li>';
        $sum+= $row->quantity * $row -> price;
      }
      echo $sum, " is income" ;
      echo '</ul>';
    ?>
    <button><a href="/index.php">go tu main</a></button>




</body>
</html>
