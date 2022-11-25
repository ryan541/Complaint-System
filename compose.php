<?php 
session_start();
if(!isset($_SESSION['userid'])){
    header("location:login.php");
}


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
<!-- session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/97ab0026dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./styles/compose.css">
    <title><?php echo $_SESSION['username'] ?></title>
</head>

<nav class="sidebar">
    <ul>
        <li>
        <div class="logo">
        <img src="./images/user.png" alt="img" >
        <span class="users">  <p>Hi,    
        <?php echo $_SESSION['username'] ?>
        </span>
        </div>
        </li>
        
        <div class="sideCos">
        <li>
            <a href="compose.html">
            <i class="fas fa-home"></i>
            <span class="nav-item">Compose</span> 
            </a>
        </li> 
        <li>
            <a href="inbox.html">
            <i class="fas fa-user"></i>
            <span class="nav-item">Inbox</span> 
            </a>
        </li> 
        <li>
            <a href="sent.html">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Sent</span> 
        </a></li> 
       
        <li>
            <a href="login.php"  class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span> 
        </a></li> 
        </div>
    </ul>
</nav>
<body>
    
<div class="char">
    <div class="main">
    <span class="searchbar">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Username" name="">
      </span>
      <span class="users">  <p>Hi,    
      <?php echo $_SESSION['username'] ?>
      </p> 
    </span>
    </div>    
</div>

<!-- <div class="main"> -->
<div class="composeForm">
    <form action="password.php" method="POST"> 
        
        <span> 
        From:
        <input type="text" id="From" placeholder="From" name="From" required>          
        </span><br>

        <span> 
        To:
        <input type="text" id="To" placeholder="To" name="To" required>          
        </span><br>
        
        <span>
        Subject:
        <input type="text" id="subject" placeholder="Enter Subject" name="subject" required>     
        </span><br>

        <span>
        Message :
        <textarea class="messageText" cols= "35" rows="5"></textarea>
        </span><br>

          <div class="button">
            <input type="submit" name = "login_details" value="Send">
        </div>        
    </form>

</div>
        

    
</body>
</html>