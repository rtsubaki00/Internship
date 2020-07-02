<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>チャット</h1>

    <form action="chat.php" method="post">
     
    名前： <input type="name" name="name"><br>
    メッセージ： <input type="text" name="message">
    
    <button name="send" type="submit">送信</button><br>

    <p>例）名前 ＠ メッセージ(日時)</p>
    </form>
</body>
</html>



<?php 
       
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo $id;
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];  
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];  
    }
  
             // DB接続
   
         $dsn = 'mysql:host=localhost; dbname=hellohhelo; charset=utf8';
         $user = 'hellouser';
         $password = 'rpass';
         $dbh = new PDO($dsn, $user, $password);
        
        
        
        
          $sql = "INSERT INTO `chat` (`name`, `message`, `time`) VALUES ('".$name."', '".$message."', now())";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
         
          
          $sql = "SELECT * FROM chat ORDER BY time";
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          foreach ($stmt as $message) {

          ?>
               <!-- 投稿内容を表示 -->
               <p>
                   No.<?php  echo $message["id"]; ?>
                   <?php echo $message["name"]; ?> @
                   <?php echo $message["message"]; ?>
                   (<?php  echo $message["time"]; ?>)
              </p>

    <?php
      }
 
           
    ?>


