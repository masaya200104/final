<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="all_item.js"></script>
<?php require 'db-conect.php'; ?>
<h2>アイテム一覧表示システム</h2>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from Items');
foreach($sql as $item){
echo '<p>ID:',$item['id'],'　カテゴリ:',$item['kategory'],'　アイテム名:',$item['name'],'</p>';
}
?>
<br>
<div class="col-auto my-1">
    <label for="sample">カテゴリごとにみたい場合は選択してください。</label>
</div>
<div class="col-auto my-1">
    <select class="form-control" id="sample" onchange="viewChange();">
        <option value="select1">アイテム</option>
        <option value="select2">武器</option>
        <option value="select3">防具</option>
    </select>
</div>

<div class="col-auto my-5">
    <div id="Box1" class="my-5">
    <?php
    $pdo1 = new PDO($connect,USER,PASS);
    $sql1 = $pdo1->query('select * from Items where kategory="アイテム"');
    foreach($sql1 as $item1){
    echo '<p>ID:',$item1['id'],'　カテゴリ:',$item1['kategory'],'　アイテム名:',$item1['name'],'</p>';
    }
    ?>
    </div>
    <div id="Box2" class="my-5" style="display:none;">
    <?php
    $pdo2 = new PDO($connect,USER,PASS);
    $sql2 = $pdo2->query('select * from Items where kategory="武器"');
    foreach($sql2 as $item2){
    echo '<p>ID:',$item2['id'],'　カテゴリ:',$item2['kategory'],'　アイテム名:',$item2['name'],'</p>';
    }
    ?>
    </div>
    <div id="Box3" class="my-5" style="display:none;"> 
    <?php
    $pdo3 = new PDO($connect,USER,PASS);
    $sql3 = $pdo3->query('select * from Items where kategory="防具"');
    foreach($sql3 as $item3){
    echo '<p>ID:',$item3['id'],'　カテゴリ:',$item3['kategory'],'　アイテム名:',$item3['name'],'</p>';
    }
    ?>
    </div>
</div>
<a href="final.php">前の画面へ</a>
</body>
</html>