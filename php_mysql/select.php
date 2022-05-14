<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "496500",
  "opentutorials");

// 1 row
echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic WHERE id = 1";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

// all row
echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($res)){
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
