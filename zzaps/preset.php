<?php
  session_start();

  $url = array();
  $url['root'] = 'http://'.$_SERVER['HTTP_HOST'].'/projects/zzaps/';
  $path['root'] = $_SERVER['DOCUMENT_ROOT'].'/projects/zzaps/';

  require_once($path['root'].'config.php');

  $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
  if (mysqli_connect_error()) {
      exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
  }

  extract($_POST);
  extract($_GET);

?>

<!-- 2020-07-16 root 주소 localhost/zzaps -> localhost/projects/zzaps 로 변경. -->