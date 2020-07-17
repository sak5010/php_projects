<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
?>
<?php
  $q = "UPDATE ap_bbs SET subject='$subject', content='$content' WHERE doc_idx=$doc_idx";
  $result = $mysqli->query($q);

  if($result == false) {
    $_SESSION['modify_status'] = 'NO';
  }
  else {
    $_SESSION['modify_status'] = 'YES';
  }
  $mysqli->close();

  header('Location: '.$url['root'].'board/modify_done.php');
  exit();
?>
