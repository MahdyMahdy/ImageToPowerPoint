<?php
  if(empty($_FILES["fileToUpload"]) || empty($_POST['email']))
  {
    return ;
  }
  $target_file = "pythonScript/files/" . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  {
    $command = escapeshellcmd('python pythonScript/main.py '.$target_file);
    shell_exec($command);
    $command = escapeshellcmd('python pythonScript/mail.py '.$_POST['email']);
    shell_exec($command);
  }
?> 