<?php

use function PHPSTORM_META\elementType;

include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $drawerNo = stripcslashes($_POST['drawer_no']);
$floorNo = stripcslashes($_POST['floor']);
$buildNo = stripcslashes($_POST['build']);
// $sql='select * FROM build where No='.$buildingNo;  
$sql = "select * from drawer where No='$drawerNo' && Build_Id='$buildNo' && Floor_id='$floorNo'";  
$res = mysqli_query($conn, $sql) or die("error occurs");
if (mysqli_num_rows($res) == 0) {

    $ssql="INSERT INTO `drawer`(`No`, `Build_Id`, `Floor_id`) VALUES ('$drawerNo','$buildNo','$floorNo');";
    echo $ssql;
    $result = mysqli_query($conn, $ssql);
    if ($result) {

        header("location: newbuild.php");
    }else {
        echo "<div >
            <p>This email is used, Try another One Please!</p>
            </div><br>";

       
      }

}else{
    echo "<div >
    <p>This floor is fount enter another One Please!</p>
    </div><br>";


}


}


// Perform necessary operations to add the building to the database
// Custom function to add the building to the database

// Redirect back to the index page
// header("Location: index.php");
// exit();
?>