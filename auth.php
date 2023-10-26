<?php
require('config.php');
  $query = $conn->prepare("SELECT*FROM users WHERE Email = ?");
  $query->execute([$_POST['email']]);

  $users = $query->fetch();
  $psswd = $_POST['password'];
  if ($users && ($psswd == $users['Password'])) {
    session_start();
    $_SESSION['email'] = $users['Email'];
    $_SESSION['password'] = $users['Password'];
    header("location:Home.php");
  } else {
    //echo "<script> alert('user existe pas');</script>";
    header("location:index.html");
   // echo 'fqsdghfdghqs'.var_dump($users);
  }
  ?>