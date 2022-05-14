<?php
$conn = mysqli_connect(
  "127.0.0.1",
  "root",
  "496500",
  "opentutorials");

  $sql = "SELECT * FROM topic";
  $res = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($res)){
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
  };

$sql = "SELECT * FROM author";
$res = mysqli_query($conn, $sql);
$select_form = '<select name="author_id">';
while($row = mysqli_fetch_array($res)){
  $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
$select_form .= '</select>';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <h2>WELCOME</h2>
    <form class="" action="process_create.php" method="post">
      <p><input type="text" name="title" placeholder="Title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <?=$select_form?>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
