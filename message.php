<?php
include 'dbconnect.php';
if(isset($_POST['login_details'])){//details is the button name
    $From = $_POST['From'];
    $To = $_POST['To'];
    $Subject =md5(sha1($_POST['Subject']));
    $Message = $_POST['Message'];
    
$sql = "INSERT INTO Complaint (Complaint,Staff ID,Student ID) VALUES('$Message','$To','$From')";
if($conn ->query($sql)===true){
    
    header("location:compose.php");

}
else{

}
}
?>