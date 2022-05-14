<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "496500",
  "opentutorials");

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
  UPDATE topic
    SET
      title='{$filtered['title']}',
      description='{$filtered['description']}'
    WHERE
      id={$filtered['id']}
";

$res = mysqli_query($conn, $sql);
if($res === true){
  echo 'update successfully <a href="index.php">돌아가기</a>';
} else {
  echo "Error";
  error_log(mysqli_error($conn));
}
 ?>
