<?php
  require_once 'configDB.php';

  $id = $_GET['id'];
  if(!array_key_exists('bag', $_SESSION)){
  $_SESSION['bag']=array();
}
$a['a'] = 12;
$a[12] = 15;
if (array_key_exists($id, $_SESSION['bag'])) {
$_SESSION['bag'][$id]++;
} else {
  $_SESSION['bag'][$id] = 1;
}

  header('Location: /');
?>
