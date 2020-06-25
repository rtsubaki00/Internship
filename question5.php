<!-- question4.phpで選んだ質問を表示 -->
<!-- 回答欄を作りquestion6.phpへ送る -->
<!-- question6.phpでtextに入れた情報を取り出す -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認フォーム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body> 
    <h2>質問文</h2>
   
   
    <?php 
    $id = $_GET["id"];
    echo $_GET['body'];
?>

   


    <form action="question6.php" method="get">
    　<h2>回答する:</h2>

    <div class="col-5">
          <textarea name="body" class="form-control" rows="5" placeholder="本文"></textarea>　　
          <input type="hidden" name="question_id" value="<?php echo $id ?>">
     </div>

    <button type="submit" class="btn btn-primary ml-3">送信</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



<!-- ここでtextに入っている文章を表示させる -->
<?php 


$dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
$user = 'hellouser';
$password = 'rpass';
//エラーキャッチ
try{
//データベースへ接続する
$pdo = new PDO($dsn, $user, $password);
// SQL作成
$id = $_GET["id"];
$sql = "SELECT * FROM  answer WHERE answer_id WHERE $id;";
$stmt = $pdo->prepare($sql);
$stmt->execute();

//データの取得
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
echo $result;
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

// foreach($message as $mes){ echo $mes["id"];}

// IDが１だったら１に入っている文章を取り出す





?>