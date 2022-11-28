<?php
session_start();
if(isset($_SESSION['error'])){
?>
<div id="alert1" style="display:block" class="alert">
    <h1><?php echo $_SESSION['error'];
   ?></h1>
</div>
<?php
 unset($_SESSION['error']);
} 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Complaint System</title>
  <link rel="stylesheet" type="text/css" href="./styles/login.css">
  <script src="https://kit.fontawesome.com/97ab0026dc.js" crossorigin="anonymous"></script>

</head>

<body onload="alert1()">

  <div class="container">
    <div class="header">
      <img src="./images/image1.png" height="100px" width="100px">
    </div>
    <div class="main">
      <form action="password.php" method="POST">
        <span>
          <i class="fa fa-user"></i>
          <input type="text" id="Username" placeholder="Username" name="Username" required>
        </span><br>
        <span>
          <i class="fa fa-lock"></i>
          <input type="password" id="Password" placeholder="Password" name="Password" required>
        </span><br>
        <h4><a href="http://localhost/Complaint_system/sign.php">Don't have an account?Click here!</a></h4>
        <div class="button">
            <input type="submit" name = "login_details" value="login">
        </div>
         <!-- <button name="details" type="submit">
              <a href="compose.html">Login</a>
        </button>  -->
      </form>
    </div>
  </div>

<script src="script.js"></script>
<script>
function alert1(){
setTimeout(
    function() {
        document.getElementById('alert1').style.display = "none";
    }, 2000);
}
</script>
</body>

</html>