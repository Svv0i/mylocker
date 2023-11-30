<?php

use function PHPSTORM_META\elementType;

include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$floorNo = stripcslashes($_POST['floor_no']);
$buildNo = stripcslashes($_POST['buildno']);
// $sql='select * FROM build where No='.$buildingNo;  
$sql = "select * from floor where No='$floorNo' && build_id='$buildNo'";  
$res = mysqli_query($conn, $sql) or die("error occurs");
if (mysqli_num_rows($res) == 0) {
    $sql = "insert into `floor`(`No`,`build_id`) values('$floorNo','$buildNo')";
    $result = mysqli_query($conn, $sql);
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