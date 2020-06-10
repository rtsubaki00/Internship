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


</body>
</html>