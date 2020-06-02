<?php
$name = $_POST['name'];
$job = $_POST['job'];
$text = $_POST['text'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>
<body>
    <p>名前：<?php echo $name; ?></p><br>
    <p>職業：<?php echo $job; ?></p><br>
    <p>本文：<?php echo $text; ?></p>
</body>
</html>