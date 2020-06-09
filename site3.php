<?php
// セッションの開始
session_start();

$name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');
$body = htmlspecialchars($_SESSION['body'], ENT_QUOTES, 'UTF-8');

$dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
$user = 'hellouser';
$password = 'rpass';

try{
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // SQL文
  $sql = 'INSERT INTO site(name, body)
  VALUES ("'.$name.'","'.$body.'")';


  $stmt = $db -> prepare($sql);

} catch (PDOException $e) {
  exit ('エラー:' .$e -> getMessage());
}

 



$stmt -> execute();



?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="utf-8">
<title>ユーザー登録フォーム・登録ページ</title>
<style>
p {
  margin-left: 50px;
}
</style>
</head>

<body>
<p>ご登録ありがとうございました。</p>
<form action="site1.php" method="post">
 <button type="submit" class="btn btn-primary ml-3">トップページへ戻る</button>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>