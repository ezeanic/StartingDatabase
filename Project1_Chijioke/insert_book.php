<?php

     $host = "csci370.csjyo0dgtpde.us-east-1.rds.amazonaws.com";   //See Step 3 about how to get host name
     $user = "ezeanic";                     //Your Cloud 9 username
     $pass = "CHIJeze123456789";                                 //Remember, there is NO password!
     $db = "books";                          //Your database name you want to connect to
     $port = 3306;                               //The port #. It is always 3306
     
    //Connect to the database
    $connection = mysqli_connect($host, $user, $pass, $db, $port);

    if($connection ->connect_errno != 0){
     die("error in db connection $db->connect_errno");
    }else{
        
    $isbnval = $_POST["ISBN"];
    $Authorval = $_POST["Author"];
    $Titleval = $_POST["Title"];
    $Priceval = $_POST["Price"];
    
    $sqlinsert = "INSERT INTO books VALUES ('$isbnval','$Authorval','$Titleval','$Priceval')";
    $connection->query($sqlinsert);
    echo "Book inserted into the database";

    $connection->close();
    }
 ?> 