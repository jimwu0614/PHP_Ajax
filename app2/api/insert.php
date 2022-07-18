<?php
//處理新增資料的請求
$dsn = "mysql:host=localhost;charset=utf8;dbname=students";
$pdo = new PDO($dsn,'root','');

$sql = "INSERT INTO students(`classroom`, `seat_num`, `name`, `birthday`) VALUES ('{$_POST['classroom']}', '{$_POST['seatnum']}', '{$_POST['name']}', '{$_POST['birthday']}')";

//回傳影響的列數
echo $pdo->exec($sql);
?>