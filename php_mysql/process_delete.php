<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "496500",
  "opentutorials");

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
);

$sql = "
  DELETE FROM topic
    WHERE
      id={$filtered['id']}
";
$res = mysqli_query($conn, $sql);
if($res === true){
  echo 'delete successfully <a href="index.php">돌아가기</a>';
} else {
  echo "Error";
  error_log(mysqli_error($conn));
}
 ?>
