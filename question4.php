<?php

    
$dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
$user = 'hellouser';
$password = 'rpass';
//エラーキャッチ
try{
//データベースへ接続する
$pdo = new PDO($dsn, $user, $password);
// SQL作成
$sql = "SELECT * FROM  question;";
$stmt = $pdo->prepare($sql);
$stmt->execute();

//データの取得
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
$message[] = $result;
}

//もしエラーが発生した時にエラーを表示する
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo $e -> getMessage();
die();
}
//接続を閉じる
$dbh = null;
//データ表示
?>
<?php
foreach($message as $mes){

?>

<!-- DBから引っ張ってくる 616-->
<!-- DBから引っ張ってきたのをIDに入れる 616-->


<!-- パラメータに文章付けたらいいんじゃない？　619 -->
<p>No.<?php echo $mes["id"]; ?>
  <a href="question5.php?id=<?php echo $mes["id"]; ?>&body=<?php echo $mes["body"]; ?>">
 <?php echo $mes["body"]; ?></p>
 </a>






<?php
}
?>

<!-- 質問する人はこちらよ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>一覧</title>
</head>
<body>
    <form action="question1.php" method="get">
        <button type="submit" class="btn btn-primary ml-3">質問する</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



