

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認フォーム</title>
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
</head>
<body> 
    <h2 class="text-center">質問文</h2>
   
   
    <?php 
    $id = $_GET["id"];
    ?>
    <div class="text-center">
    <?php
    $body = $_GET['body'];
    echo $_GET['body'];
     ?>
    </div>

   


    <form action="question6.php" method="get">
    　<h2 class="text-center">回答する:</h2>

    <div class="text-center mx-auto" style="width: 50%">
          <textarea name="body" class="form-control" rows="5" placeholder="本文"></textarea>　　
        </div>
          <input type="hidden" name="question_id" value="<?php echo $id ?>">

          <div class="text-center">
              <button type="submit" class="btn btn-info ml-3">送信</button>
          </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>




<?php 


$dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
$user = 'hellouser';
$password = 'rpass';
//エラーキャッチ
try{
//データベースへ接続する
$pdo = new PDO($dsn, $user, $password);
// SQL作成

$sql = "SELECT body,answer_id FROM  answer WHERE id = ?";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $id, PDO::PARAM_STR);

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



?>

<div class="text-center">
<?php
    if(empty($message)){
        echo "回答がありません";
    }else{
foreach($message as $mes){
    ?>

    <p>No. <?php echo $mes['answer_id'];?>

    <?php
    echo $mes['body']; 
    ?>
    <br></p>
    <?php
    }
} ?>
</div>


