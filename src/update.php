<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="css/style.css" rel="stylesheet" type="text/css">
<?php require 'db-conect.php'; ?>
<h2>アイテム情報更新システム</h2>
    <p>商品情報を表示します</p>
    <table  align="center">
    <tr><th>ID</th><th>カテゴリ</th><th>商品名</th></tr>
    
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from Items');
foreach($sql as $item){
    echo '<form action="update_output.php" method="post"><tr><td>',$item['id'],'<input type="hidden" name="id" value="',$item['id'],'"></td><td><input type="text" name="kategory" value="',$item['kategory'],'"></td><td><input type="text" name="name" value="',$item['name'],'"></td><td><input type="submit" value="更新"></form></td></tr>';
}
?>
    </table>
    <a href="final.php">前の画面へ</a>
</body>
</html>