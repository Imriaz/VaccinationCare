<?php
session_start();
error_reporting(E_ALL);

if(isset($_POST['Update'])){

    $host = 'localhost';
    $user = 'id17956073_imriaz';
    $pass ='F\!V/nD]3hEIdW8C';
    $db   = 'id17956073_vaccinationc';
    $conn = new mysqli($host, $user, $pass, $db);

    $c_FullName=$_POST['child_FullName'];
    $G_Name=$_POST['Guardian_Name'];
    $c_birthday=$_POST['child_birthday'];
    $G_Email=$_POST['Guardian_Email'];
    $c_Password=$_POST['child_Password'];
    $c_Address=$_POST['child_Address'];
    $G_Phone=$_POST['Guardian_Phone'];
    $c_gender=$_POST['Gender'];

    $loggedInUser = $_SESSION['Guardian_Email'];

    $sql = "UPDATE child SET child_FullName = '$c_FullName', Guardian_Name ='$G_Name', 
    child_birthday='$c_birthday', Guardian_Email = '$G_Email', child_Password ='$c_Password', 
    child_Address='$c_Address', Guardian_Phone='$G_Phone', Gender='$c_gender' WHERE Guardian_Email = '$loggedInUser'";
    $res = mysqli_query($conn, $sql);
	     if (mysqli_affected_rows( $conn) == 1){
             echo "Updated Successfully";     
         }
         else {
             echo "invalid username and password";
          }                   
}
header("location:profileupdate.php");
exit;
?>