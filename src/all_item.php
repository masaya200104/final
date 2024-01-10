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
$sql = $pdo->query('select id,kategory_name,name from Items INNER JOIN Kategory on Items.kategory_id = Kategory.kategory_id');
echo '<table align="center">';
foreach($sql as $item){
echo '<tr><td align="left"><p>ID:',$item['id'],'</p></td><td align="left"><p>　カテゴリ:',$item['kategory_name'],'</p></td><td align="left"><p>　アイテム名:',$item['name'],'</p></td></tr>';
}
?>
</table>
<?php
/*
echo '
<br>
<tr>
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
</tr>
';
echo '<div class="col-auto my-5">';
echo '<div id="Box1" class="my-5">';
    
    $pdo1 = new PDO($connect,USER,PASS);
    $sql1 = $pdo1->query('select * from Items where kategory="アイテム"');
    foreach($sql1 as $item1){
    echo '<div id="flex"><p id="div">ID:',$item1['id'],'</p><p id="div">　カテゴリ:',$item1['kategory'],'</p><p id="div">　アイテム名:',$item1['name'],'</p></div>';
    }
    ?>
    </div>
    <div id="Box2" class="my-5" style="display:none;">
    <?php
    $pdo2 = new PDO($connect,USER,PASS);
    $sql2 = $pdo2->query('select * from Items where kategory="武器"');
    foreach($sql2 as $item2){
    echo '<div id="flex"><p id="div">ID:',$item2['id'],'</p><p id="div">　カテゴリ:',$item2['kategory'],'</p><p id="div">　アイテム名:',$item2['name'],'</p></div>';
    }
    ?>
    </div>
    <div id="Box3" class="my-5" style="display:none;"> 
    <?php
    $pdo3 = new PDO($connect,USER,PASS);
    $sql3 = $pdo3->query('select * from Items where kategory="防具"');
    foreach($sql3 as $item3){
    echo '<div id="flex"><p id="div">ID:',$item3['id'],'</p><p id="div">　カテゴリ:',$item3['kategory'],'</p><p id="div">　アイテム名:',$item3['name'],'</p></div></div></table>';
    }
    */
    ?>
    
</div>
<a href="final.php">前の画面へ</a>
</body>
</html>