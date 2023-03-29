<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3章チェックテスト</title>
  <link rel="stylesheet" href="edit.css">
</head>
<body>
  <div class="gray">
    <div class="center">
      <div class="font_white">  
        <br>
        <br>
        <?php 
          $character = $_POST['character'];
          echo "お疲れ様です".$character."さん";
        ?>
        <br>
        <br>
        <h2>ネットワークのポート番号は何番？</h2>
        <br>  
        <form action="answer.php" method="post">
          <?php
            $port_numbers = ["80","20","22","21"];
            foreach ($port_numbers as $port_number) { ?>
              <input type="radio">
              <?php echo $port_number;
            }
            $port_number_answer = "80";  
          ?>
        <br>  
        <br> 
        <h2>②Webページを作成するための言語は？</h2>  
        <br>  
          <?php
            $web_languages = ["PHP","Python","JAVA","HTML"];
            foreach ($web_languages as $web_language) { ?>
              <input type="radio">
              <?php echo $web_language;
            }
            $web_language_answer = "HTML";
          ?>
        <br>  
        <br>  
          <h2>③MySQLで情報を取得するためのコマンドは？</h2>
          <br>  
            <?php
              $mysql_commands = ["join","select","insert","update"];
              foreach ($mysql_commands as $mysql_command) { ?>
                <input type="radio">
                <?php echo $mysql_command;
              }
              // $mysql_command_answer = "select";
            ?>
          <br>
          <input type="submit" value="回答する" class="button_roundness
          "> 
        </from>          
      </div>
    </div>
  </div>
</body>
</html>
