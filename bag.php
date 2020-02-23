<?php
  require 'configDB.php'; ?>
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
    <h1>Items</h1>


    <?php
    /*
[ {id} => {qty}, {id} => {qty}]
$_SESSION['bag'] = [
  21 => 12,
  23 => 1
]
$_SESSION['bag'][21]
    */
$id_s=array_keys($_SESSION['bag']);
$id_s = implode(',', $id_s);

echo $id_s;

echo '<ul>';
$query = $pdo->query('SELECT * FROM `tasks` WHERE id IN ('.$id_s.')');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
  echo '<li><b>'.$row->task.' '. $_SESSION['bag'][$row->id].'</b></li>';
  $sum+= $row->quantity * $row -> price;

}
echo $sum, " is income" ;
echo '</ul>';
    ?>
<button><a href="/index.php">go to main</a></button>
</body>
</html>
