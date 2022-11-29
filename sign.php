<!DOCTYPE html>
<html>

<head>
  <title>Complaint System</title>
  <link rel="stylesheet" type="text/css" href="./styles/login.css">
  <script src="https://kit.fontawesome.com/97ab0026dc.js" crossorigin="anonymous"></script>

</head>

<body>

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
          <i class="fa fa-user"></i>
          <input type="text" id="Adm" placeholder="Admission Number" name="Adm" required>
        </span><br>
        <span>
          <i class="fa fa-user"></i>
          <input type="text" id="School" placeholder="School" name="School" required>
        </span><br>
        <span>
          <i class="fa fa-user"></i>
          <input type="text" id="Sub" placeholder="Sub-School" name="Sub" required>
        </span><br>
        <span>
          <i class="fa fa-lock"></i>
          <input type="password" id="Password" placeholder="Password" name="Password" required>
        </span><br>
        <span>
          <i class="fa fa-lock"></i>
          <input type="password" id="confirm_Password" placeholder="Confirm Password" name="confirm_Password" required>
        </span><br>
        <div class="button">
            <input type="submit" name = "sign_details" value="Sign Up">
        </div>
        <h4><a href="http://localhost/Complaint_system/login.php">Have an account?Click here!</a></h4>
        
         <!-- <button name="details" type="submit">
              <a href="compose.html">Login</a>
        </button>  -->
      </form>
    </div>
  </div>

<script src="script.js"></script>

</body>

</html>