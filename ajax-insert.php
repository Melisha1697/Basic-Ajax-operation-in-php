<?php

    // database connection
    $connect = mysqli_connect("localhost", "root", "", "ajax_lab") or die("Connection Failed");
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    // select query to fetch data
    $sql = "INSERT INTO employee(name, contact, email)
     VALUES('$name', '$contact', '$email')";
    
    // query execution
    $result = mysqli_query($connect, $sql);
    echo "DATA Inserted";
?>