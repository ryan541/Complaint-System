<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['message'])){//details is the button name

    $From = $_POST['From'];
    $To = $_POST['To'];
    $Subject =$_POST['Subject'];
    $Message = $_POST['Message'];
    
$sql = "INSERT INTO Complaints (Student_ID,Staff_ID,Complaint_ID,Complaint) VALUES('$From','$To','$Subject','$Message')";
if($conn ->query($sql)===true){
    
    header("location:compose.php");

} else{

}
}
?>