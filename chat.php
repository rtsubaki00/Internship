<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>チャット</h1>

    <form action="chat.php" method="post">
     
     <div class="form-grou col-5">
     <input type="text" name="name" class="form-control" placeholder="名前">
     </div>

     <div class="form-group col-5">　
     <textarea name="body" name="message" class="form-control" rows="5" placeholder="メッセージ"></textarea>　　
     </div>

    
     <div class="col-sm-10 offset-sm-2">
     <button type="submit" name="send" class="btn btn-primary">送信</button>
     </div>

     <p>例）名前 ＠ メッセージ(日時)</p>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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


