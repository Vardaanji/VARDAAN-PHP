<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytv";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (067, 'Vardaan', 'tvv@gmail.com', '1234567859');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>This program is written by Vardaan Valecha";
    $conn->close();
    
?>