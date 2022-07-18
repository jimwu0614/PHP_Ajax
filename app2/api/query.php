<?php
//處理查詢資料的請求

//從index來的get資料
$classroom=$_GET['classroom'];

$dsn = "mysql:host=localhost;charset=utf8;dbname=students";
$pdo = new PDO($dsn, 'root', '');


$sql = "SELECT * FROM students WHERE classroom = '{$classroom}'";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// print_r($rows)


// 轉成json格式 (以字串的方式)
echo json_encode($rows)













?>