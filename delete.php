<?php
  $conn = mysqli_connect("localhost", "root", 'hyunwook');
  mysqli_select_db($conn, "opentutorials");
  $sql = "DELETE FROM topic WHERE id=".;
  mysqli_query($conn, $sql);
