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
$p = new PDO($connect,USER,PASS);
$s = $p->prepare('select kategory_id from Kategory where kategory_name =?');
$s -> execute([$_POST['kategory']]);
$d = new PDO($connect,USER,PASS);
$q = $d->prepare('insert into Items values(null,?,?)');
foreach($s as $id){
if($q -> execute([$id['kategory_id'],$_POST['name']])){
    echo '<p>追加に成功しました。</p><br>';
}else{
    echo '<p>追加に失敗しました。</p><br>';
}
}
?>
<a href="final.php">前の画面へ</a>
</body>
</html>