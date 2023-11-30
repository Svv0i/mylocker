<?php

use function PHPSTORM_META\elementType;

include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $build = stripcslashes($_POST['build']);
    $floor = stripcslashes($_POST['floor']);
    $drawer = stripcslashes($_POST['Drawer']);
    $type = stripcslashes($_POST['type']);
    $id = stripcslashes($_SESSION['id']);
    $state =0;
    $query = mysqli_query($conn, "SELECT state FROM drawer where id=$drawer ") or die("error occurs");
             
    while ($result = mysqli_fetch_assoc($query)) {
        $state = $result["state"];
    }
    if($state==1){

        echo "<div class='message'>
        <p>drawer reserved </p>
        </div><br>";

    }else{

        $query = "INSERT INTO `reserve`(`user_id`,build,`floor`,Drawer,`type`) VALUES('$id','$build','$floor','$drawer','$type')";

        $data = mysqli_query($conn, $query);
    
        if ($data) {
            $edit_query = mysqli_query($conn, "UPDATE drawer SET state=1 WHERE id = $drawer");
            header("location: mybookings.php");        
        }
    }
  
}

?>