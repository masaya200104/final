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
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->prepare('insert into Kategory values(null,?)');
if($sql -> execute([$_POST['kate_name']]) ){
    echo '<p>追加に成功しました。</p><br>';
}else{
    echo '<p>追加に失敗しました。</p><br>';
}
?>
<a href="final.php">前の画面へ</a>
</body>
</html>