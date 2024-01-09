<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="css/style.css" rel="stylesheet" type="text/css">
<h2>アイテム情報削除システム</h2>
<?php require 'db-conect.php'; ?>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from Items');
echo '<form action="delete_output.php" method="post">';
foreach($sql as $item){
echo '<p><input type="checkbox" name="item[]" value="',$item['id'],'">',$item['name'],'</p>';
}
echo '<input type="submit" value="削除">';
echo '</form>';
?>
<a href="final.php">前の画面へ</a>
</body>
</html>