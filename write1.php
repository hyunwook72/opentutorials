<!DOCTYPE html>
<html>
<head>
  <title> WEB </title>
  <meta charset="utf-8">
</head>
<body>
<h1>
  WEB
</h1>
<?php
//php야, localhost 주소에 있는 mysql server에 id는 root, password는 hyunwook, 데이터베이스는
//opentutorials로 접속해
$conn = mysqli_connect("localhost", "root", 'hyunwook');
//php야, opentutorials database를 이제부터 사용할거야.
mysqli_select_db($conn, "opentutorials");
//php야, mysql server에서 select id, title from topic sql을 요청해서 응답을 받아와.
$result = mysqli_query($conn, 'SELECT id,title FROM topic');
//php야, $result의 쿼리 결과를 가져와서 $row 변수에 담아줘
// 만약 $row 변수의 값이 null이라면 반복실행을 하지마
?>
<ol>
<?php
while($row = mysqli_fetch_assoc($result)){
//그리고 $row 변수의 값이 null이 아니면 아래 명령을 실행해줘

  print("<li><a href=\"db1.php?id={$row['id']}\">{$row['title']}</a></li>\n");

}
?>
</ol>
  <a href="write.php">WRITE</a>
  <form action="process1.php" method="post">
    <p>
      <input type="text" name="title" placeholder="title">
    </p>
    <p>
      <textarea name="description" placeholder="description"></textarea>
    </p>
    <p>
      <input type="submit" value="submit">
    </p>
</form>
</body>
</html>
