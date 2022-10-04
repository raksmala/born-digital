<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysqli = new mysqli("localhost", "root", "", "born-digital");
    if($mysqli->connect_error) {
      exit('Could not connect');
    }
    $sql = "select * from user where username = '" . $username . "' and password = '" . $password . "'";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
      echo 'success';
    } else {
      echo 'failed';
    }
?>