<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $gifts = escapeshellarg($_POST['gifts']);

    $command = "python3 gift_selector.py $gifts";
    $result = shell_exec($command);

    echo $result;
  }
?>