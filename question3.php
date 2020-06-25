<!-- DBに接続・挿入　618 -->
<!-- question1.phpで選んだIDと同じIDの中に挿入 -->
<!-- このページでIDを与える？　618 -->
<?php

session_start();

$text = htmlspecialchars($_SESSION['text'], ENT_QUOTES, 'UTF-8');

$dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
$user = 'hellouser';
$password = 'rpass';

try{
    $db = new PDO($dsn, $user, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = 'INSERT INTO question VALUES ("'.$text.'")';

    $stmt = $db -> prepare($sql);
} catch (PDOException $e) {
    exit ('エラー:' .$e -> getMessage());
}

$stmt -> execute();

// 質問に戻る　616
// question5.phpを作って質問と回答が同時に見えるようにする
// question5.phpから一覧に戻るボタン作成　


?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h2>登録完了</h2>
    <!-- ここで内容をquestion1.phpのIDに送る　618 -->
    <form action="question4.php" method="get">
        <button type="submit" class="btn btn-primary ml-3">一覧に戻る</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>