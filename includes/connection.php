<?php
    $servername = 'localhost';
    $username = 'sudeepta_ngaan';
    $password = 'Uyp6TDW$qbZ&';
    $dbname = 'sudeepta_ngaan';

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
