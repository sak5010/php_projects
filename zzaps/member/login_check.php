<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
?>

<?php
  session_start();

  $q = "SELECT * FROM ap_member WHERE id='$user_id'";
  $result = $mysqli->query($q);

  if($result->num_rows == 1) {
    // 해당 id의 회원이 존재하는 경우 암호가 맞는지 확인
    $encryped_pass = sha1($user_pass);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if($row['pw'] == $encryped_pass) {
      // 암호 일치
      $_SESSION['is_logged'] = 'YES';
      $_SESSION['user_id'] = $user_id;
      $_SESSION['member_idx'] = $row['member_idx'];
    }
    else {
      // 암호 틀림
      $_SESSION['is_logged'] = 'NO';
      $_SESSION['user_id'] = '';
    }
    header('Location: '.$url['root'].'member/login_done.php');
    exit();
  }
  else {
    echo 'not a member';
  }

  $result->free();
  $mysqli->close();
?>
