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

<h3 class="ml-5 font-weight-bold">質問一覧</h3>
<?php
foreach($message as $mes){

?>



<p class="ml-5">No.<?php echo $mes["id"]; ?>
  <a href="question5.php?id=<?php echo $mes["id"]; ?>&body=<?php echo $mes["body"]; ?>">
 <?php echo $mes["body"]; ?></p>
 </a>






<?php
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <title>一覧</title>
</head>
<body>

  
    <form action="question1.php" method="get">
        <div>
            <button type="submit" class="btn btn-info ml-5">質問する</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



