<!DOCTYPE html>
<html lang="en">
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
        <br><br><br>
        <h2><?php echo $_POST['character_hide']."さんの結果は・・?";?></h2><br>
        <h2>①の結果<h2>
				<?php $port = $_POST['port'];
          $port_answer = $_POST['port_answer'];
          if ($port == $port_answer) {
              echo "正解！";
          } else {
              echo "残念・・・";
          }
        ?>        
        <br><br>  
        <h2>②の結果<h2>
				<?php $language = $_POST['language'];
          $language_answer = $_POST['language_answer'];
          if ($language == $language_answer) {
              echo "正解！";
          } else {
              echo "残念・・・";
          }
        ?>
        <br><br>  
        <h2>③の結果<h2>
				<?php $command = $_POST['command'];
 				  $command_answer = $_POST['command_answer'];
          if ($command == $command_answer) {
              echo "正解！";
          } else {
              echo "残念・・・";
          }
        ?>
        <br>
        </div>
    </div>
  </div>
</body>
</html>

