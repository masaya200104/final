<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="css/style.css" rel="stylesheet" type="text/css">
    <h2>アイテム追加システム</h2>
    
    <p>商品を追加します</p>
    <form action="regitem_output.php" method="post">
    <div id="flex">
    <p id="reg">
    カテゴリ<select name="kategory">
    <option>アイテム</option>
    <option>武器</option>
    <option>防具</option>
    </select>
    </p>
    <p id="reg">
    商品名<input tyep="text" name="name">
    </P>
    <p>
    <input type="submit" value="追加">
    </p>
    </div>
    </form>
    <a href="final.php">前の画面へ</a>
    
</body>
</html>