<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
?>

<?php

  $encryped_pass = sha1($user_pass);

  $q = "INSERT INTO ap_member ( id, pw, email ) VALUES ( '$user_id', '$encryped_pass', '$user_email')";
  $mysqli->query($q);

  $mysqli->close();

  header('Location: '.$url['root'].'member/signup_done.php');
  exit();
?>
