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
        
    $searchval = $_POST['searchTerm'];
    $searchtype =  $_POST['searchType'];
    $sqlstatement = "select * from books where $searchtype='$searchval';";

     $result = $connection->query($sqlstatement);
     $num_results = $result->num_rows;
     
    echo "<h1>Uindy Search Results</h1>";
    echo "<p>Number of books found: $num_results <br>";
     
     while($row = $result->fetch_assoc()){
         echo "<h4> Title: {$row["Title"]} </h4>";
         echo "<p>Author: {$row["Author"]}</p>";
         echo "<p>ISBN: {$row["ISBN"]}</p>";
         echo "<p>Price: {$row["Price"]}</p>";
     }

     $connection->close();
     }
 ?> 