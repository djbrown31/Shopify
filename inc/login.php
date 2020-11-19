<?php

    // $_POST['username'];
    // $_POST['password'];

    if(isset($_POST['username']) || !isset($_POST['password'])) {
        die("Error:".var_dump($_POST));
    }

    session_start();
    include_once "config.php";
    $conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);

    if($conn->connect_error) {
        die("Connectiopn failed:".$conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT `id`, `username`, `password` FROM `users` WHERE `username` = ?")

    $stmt->bind_param("sss", $_POST['username']);
    $stmt->execute();
    $stmt->bind_result($id, $name, $password);
    $stmt->fetch();

    if(password_verify($_POST['password'],$password)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $name;
        header("Location: ../index.php");
    }
    else {
        header("Location: ../signin.php");
    }
    $conn->close();