<?php

    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = '';
    $database = 'giang';
    $port = 3307; //3306

    $conn = mysqli_connect($servername, $usernameDB, $passwordDB, $database, $port);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // $date = date('Y-m-d H:i:s');
    // $sql = "INSERT INTO user VALUES (2,'a@gmail.com', '123', 'a.png', '".$date."')";

    // if($conn->query($sql) === TRUE){
    //     echo "New record created successfully";
    // }else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();

?>