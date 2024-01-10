<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'db-conect.php'; ?>
<link href="css/style.css" rel="stylesheet" type="text/css">
    <h2>カテゴリ追加システム</h2>
    
    <p>追加するカテゴリを書いてください</p>
    <form action="kate_reg_output.php" method="post">
    <div id="flex">
    <p id="reg">
    カテゴリ名<input tyep="text" name="kate_name">
    </P>
    <p>
    <input type="submit" value="追加">
    </p>
    </div>
    </form>
    <a href="final.php">前の画面へ</a>
    
</body>
</html>