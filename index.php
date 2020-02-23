<?php require_once 'configDB.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Online shop</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Items</h1>


    <?php
      require_once 'configDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`  DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.' '. $row->price.'</b><a href="/add_bag.php?id='.$row->id.'"><button>Add in bag</button></a></li>';
      }
      echo '</ul>';
    ?>

    </b><a href="/bag.php?id='.$row->id.'"><button>Go to bag</button></a>


</body>
</html>
