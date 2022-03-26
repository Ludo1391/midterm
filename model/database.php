<?php
    $dsn = 'mysql:host=	acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=fw7u0l5jisj25d10';
    $username = 'rmwr8ppcqvt4nvrt';
    $password = 'mjdh9ub8dr92h01e';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('view/error.php');
        exit();
    }
?>
