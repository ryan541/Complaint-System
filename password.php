<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['sign_details'])){//details is the button name

    $Username = $_POST['Username'];
    $Password =md5(sha1($_POST['Password']));
    
$sql = "INSERT INTO Login (Username,Password) VALUES('$Username','$Password')";
if($conn ->query($sql)===true){
    header("location:compose.php");

}
else{

}
}

if(isset($_POST['sign_details'])){//details is the button name

    $Username = $_POST['Username'];
    $Adm = $_POST['Adm'];
    $School = $_POST['School'];
    $Sub = $_POST['Sub'];
    
    
    
$sql = "INSERT INTO Students (Name,Student_ID,School,Subschool_ID) VALUES('$Username','$Adm','$School','$Sub')";
if($conn ->query($sql)===true){
    header("location:compose.php");

}
else{

}
}



if(isset($_POST['login_details'])){//details is the button name

    $Username = $_POST['Username'];
    $Password =md5(sha1($_POST['Password']));
    
$sql = "SELECT id,Username FROM Login WHERE Username='$Username' AND Password='$Password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['userid'] = $row['id'];
    $_SESSION['username'] = $row['Username'];
    header("location:compose.php");
} else {
 $_SESSION['error'] = "Incorrect password";
  header("location:login.php");
}
}
?>