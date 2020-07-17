<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
?>
<?php
  $_SESSION['is_logged'] = 'NO';
  $_SESSION['user_id'] = '';
  $_SESSION['member_idx'] = '';

  unset($_SESSION['user_id']);
  unset($_SESSION['member_idx']);

  header('Location: '.$url['root'].'member/logout_done.php');
  exit();
?>
