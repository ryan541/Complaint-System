<?php
session_start();
include 'dbconnect.php';

// $new = "Yeeees";

if(isset($_POST['submit'])){
// if($_SERVER['REQUEST_METHOD' == 'POST']){//details is the button name
    $From = $_POST['From'];
    $To = $_POST['To'];
    $Subject =$_POST['Subject'];
    $Message = $_POST['Message'];

    echo "$From";
    
$sql = "INSERT INTO Complaints (Student_ID,Staff_ID,Complaint) VALUES('$From','$To','$Message')";

if($conn ->query($sql)===true){
    
    header("location: compose.php");

} else{

}
}
?>