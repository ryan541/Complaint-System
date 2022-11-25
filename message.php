<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['login_details'])){//details is the button name
    $From = $_POST['From'];
    $To = $_POST['To'];
    $Subject =($_POST['Subject']);
    $Message = $_POST['Message'];
    
$sql = "INSERT INTO Complaint (Student ID,Staff ID,Complaint ID,Complaint) VALUES ('$From','$To','$Subject','$Message')";
if($conn ->query($sql)===true){
    
    header("location:compose.php");

}
else{

}
}
?>