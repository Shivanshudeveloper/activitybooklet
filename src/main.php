<?php
//fetch.php
include './database.php';

if (isset($_POST['institute'])) {
    $sql = "SELECT * FROM onestudentonetree";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['institutes'];
    
        }
}

if (isset($_POST['student'])) {
    $sql = "SELECT * FROM onestudentonetree";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['students'];
    
        }
}

if (isset($_POST['jal_students'])) {
    $sql = "SELECT * FROM jalshakti";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['students'];
    
        }
}

if (isset($_POST['courses'])) {
    $sql = "SELECT * FROM abhiyanta";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['tree '];
    
        }
}
if (isset($_POST['papers'])) {
    $sql = "SELECT * FROM abhiyanta";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['tree '];
    
        }
}
if (isset($_POST['academy'])) {
    $sql = "SELECT * FROM atal";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['tree '];
    
        }
}
if (isset($_POST['thrust_area'])) {
    $sql = "SELECT * FROM atal";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['atal'];
    
        }
}
if (isset($_POST['workshop'])) {
    $sql = "SELECT * FROM atal";
    $res = mysqli_query($conn,$sql);
    if($res)
        while($row = mysqli_fetch_assoc($res)){
            echo $row['atal'];
    
        }
}

?>