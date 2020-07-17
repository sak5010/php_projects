<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/main.css" rel="stylesheet">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/board/css/editor.css" type="text/css" charset="utf-8"/>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/board/js/editor_loader.js" type="text/javascript" charset="utf-8"></script>
    <title> 기본 틀 </title>
  </head>
  <body>
    <div class="header">
      <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/index.php"> 홈 </a>
      <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/board/list.php"> 게시판 </a>
      <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/zzaps/board/write.php"> 글쓰기 </a>
      <br />
      로그인 상태:
      <?php
        if($_SESSION['is_logged'] == 'YES') {
          echo '로그인 되었습니다.';
          echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/zzaps/member/logout.php"> 로그아웃 </a>';
        }
      ?>
    </div>
    <div class="content">
