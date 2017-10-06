<?php
  $conn = mysqli_connect("localhost", "root", 'hyunwook');
  mysqli_select_db($conn, "opentutorials");
  $sql = "INSERT INTO topic (title, description, author) VALUES('{$_POST['title']}','{$_POST['description']}', 1);";
  mysqli_query($conn, $sql);
  header('Location: db1.php?id='.mysqli_insert_id($conn));
?>
