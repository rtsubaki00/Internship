<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <h3 class="text-center font-weight-bold">チャット</h3>

    <form action="chat.php" method="post">

     <input type="hidden" name="id">
     
     <div class="form-grou mx-auto mt-4" style="width: 50%;">
     <input type="text" name="name" class="form-control" placeholder="名前">
     </div>

     <div class="form-group mx-auto" style="width: 75%;">　
     <textarea type="body" name="message" class="form-control" rows="5" placeholder="メッセージ"></textarea>　　
     </div>

    
     <div class="text-center mt-2">
     <button type="submit" name="send" class="btn btn-info">送信</button>
     </div>

     <p class="text-center font-weight-bold">名前 ＠ メッセージ(日時)</p>
     <p>最新の10件を表示中！</p>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



<?php 

// 何か送るとエラーは消える
// エラーの正体は中身が空
// 現在の地点で$_POST[]が空なのは当たり前
// 本当はDBが空か確認しなければいけない
// 変数を受ける
if(isset($_POST['id'])){
    $id = $_POST['id'];
} 
if(isset($_POST['name'])){
    $name = $_POST['name'];  
} 
if(isset($_POST['message'])){
    $message = $_POST['message'];  
} 
        
//   var_dump(isset($_POST['id']));
//   var_dump(isset($_POST['name']));
//   var_dump(isset($_POST['message']));
  
             // DB接続
   
         $dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
         $user = 'hellouser';
         $password = 'rpass';
         $dbh = new PDO($dsn, $user, $password);
        
        
        
        // エラーの原因
        if( isset($_POST['id']) && isset($_POST['name']) && isset($_POST['message']) ) {
          $sql = "INSERT INTO `chat` (`name`, `message`, `time`) VALUES ('".$name."', '".$message."', now())";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
        }
         
          
          $sql = "SELECT * FROM chat ORDER BY id DESC limit 10";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();

          

          foreach ($stmt as $message) {


                    ?>
                    <!-- 投稿内容を表示 -->
                    <p class="border border-info rounded col-5">
                        No.<?php  echo $message["id"]; ?>
                        <?php echo $message["name"]; ?> @
                        <?php echo $message["message"]; ?><br>
                        (<?php  echo $message["time"]; ?>)
                   </p>


    <?php
      }
    
           
    ?>


