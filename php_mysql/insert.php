<?php
$conn = mysqli_connect("127.0.0.1", "root", "496500", "opentutorials");
$sql = "
  INSERT INTO topic (
    title,
    description,
    created
    ) VALUES (
      'MySQL',
      'MySQL is ...',
      NOW()
    )";
$res = mysqli_query($conn, $sql);
if($res === false){
  echo mysqli_error($conn);
}

 ?>
