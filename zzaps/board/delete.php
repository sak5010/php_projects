<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
?>
<?php
  $q = "DELETE FROM ap_bbs WHERE doc_idx=$doc_idx";
  $result = $mysqli->query($q);

  if(result == false) {
    $_SESSION['delete_status'] = 'NO';
  }
  else {
    $_SESSION['delete_status'] = 'YES';
  }
  $mysqli->close();

  header('Location: '.$url['root'].'board/delete_done.php');
  exit();
?>
