<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "496500",
  "opentutorials");

$filtered = array(
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile']),
);

$sql = "
  INSERT INTO author
    (name, profile)
    VALUES(
        '{$filtered['name']}',
        '{$filtered['profile']}'
    )
  ";

$res = mysqli_query($conn, $sql);
if($res === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  error_log(mysqli_error($conn));
} else {
  header('Location: author.php');
}
echo $sql;
 ?>
