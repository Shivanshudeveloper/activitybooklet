<?php
     $dbname = "activitybooklet";
     $dbservername = "localhost";
     $dbusername = "root";
     $dbpassword = "";
     //Connection
     $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

     if(!$conn) {
        //echo("<script>console.log('Error connecting to the database');</script>");
     }
     else {
        //echo("<script>console.log('Database connected successfully');</script>");
     }
?>