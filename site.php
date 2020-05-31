<?php
$name = $_POST['name'];
$job = $_POST['job'];
$text = $_POST['text'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=Shift-JIS">
    <title>結果</title>
</head>
<body>
    <p>名前：<?php echo $name; ?></p><br>
    <p>職業：<?php echo $job; ?></p><br>
    <p>本文：<?php echo $text ?></p>
</body>
</html>