<?php
//處理刪除資料的請求

$id=$_POST['id'];

$dsn = "mysql:host=localhost;charset=utf8;dbname=students";
$pdo = new PDO($dsn,'root','');

$sql = "DELETE FROM students WHERE id='$id'";

//回傳影響的列數
echo $pdo->exec($sql);
?>



