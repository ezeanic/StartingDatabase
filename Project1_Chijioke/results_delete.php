<!DOCTYPE html>

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
        
    
    $deletetype =  $_POST['deleteType'];
    $deleteval = $_POST['deleteTerm'];
    $sqldeletestatement= "delete from books where $deletetype='$deleteval';";

     $connection->query($sqldeletestatement);
     $num_results = $result->num_rows;
     
    echo "<h1>Uindy Delete Results</h1>";
    echo "<p>Book deleted: $num_results <br>";

     $connection->close();
     }
 ?> 