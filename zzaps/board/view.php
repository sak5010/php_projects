<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/zzaps/preset.php');
  include($_SERVER['DOCUMENT_ROOT'].'/zzaps/header.php');

  $q = "SELECT * FROM ap_bbs WHERE doc_idx = $doc_idx";
  $result = $mysqli->query($q);
  $data = $result->fetch_array();
?>

<table>
  <tr>
    <td>
      제목
    </td>
    <td>
      <?php echo $data['subject']; ?>
    </td>
  </tr>
  <tr>
    <td>
      작성자
    </td>
    <td>
      <?php echo $data['member_idx']; ?>
    </td>
  </tr>
  <tr>
    <td>
      내용
    </td>
    <td>
      <?php echo $data['content']; ?>
    </td>
  </tr>
</table>

<?php
  if($_SESSION['member_idx'] == $data['member_idx']) {
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/zzaps/board/modify.php?doc_idx='.$doc_idx.'" class="btn"> 수정 </a>';
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/zzaps/board/delete.php?doc_idx='.$doc_idx.'" class="btn"> 삭제 </a>';
  }
?>

<?php
  echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/zzaps/board/list.php" class="btn"> 목록 </a>';
?>

<?php
  include($_SERVER['DOCUMENT_ROOT'].'/zzaps/footer.php');
?>
