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
$sql = $pdo->prepare('update Items set kategory=?,name=? where id=?');
if($sql->execute([htmlspecialchars($_POST['kategory']),htmlspecialchars($_POST['name']),$_POST['id']])){
    echo '<p>更新しました。</p><br>';
}else{
    echo '<p>更新に失敗しました。</p><br>';
}
?> 
   <a href="final.php">前の画面へ</a>
</body>
</html>