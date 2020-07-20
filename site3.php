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
<meta charset="utf-8">
<title>ユーザー登録フォーム・登録ページ</title>
<style>
p {
  margin-left: 50px;
}
</style>
</head>

<body>
<p class="text-center mt-4">ご登録ありがとうございました。</p>
<form action="site1.php" method="post">

<div class="text-center">
  <button type="submit" class="btn btn-info ml-3">トップページに戻る</button>
</div>
 
</form>


</body>
</html>