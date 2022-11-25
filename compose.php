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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php echo $_SESSION['username'] ?></title>
</head>

<nav class="sidebar">
    <ul>
        <li>
        <div class="logo">
        <img src="/res/image1.png" alt="" >
        <span class="nav-item one" ></span> </div></li>
        
        <div class="sideCos">
        <li>
            <a href="compose.html">
            <i class="fas fa-home"></i>
            <span class="nav-item">Compose</span> 
        </a></li> 
        <li>
            <a href="inbox.html">
            <i class="fas fa-user"></i>
            <span class="nav-item">Inbox</span> 
        </a></li> 
        <li>
            <a href="sent.html">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Sent</span> 
        </a></li> 
     </ul>
     <li>
        <a href="login.php"  class="logout">
        <i class="fas fa-sign-out-alt"></i>
        <span class="nav-item">Log out</span> 
    </a></li> 
</div>
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
    <form class="form2"> 
        
        <span>           
          To:
          <input type="text"  name="">
        </span><br>
        
        <span>
          Subject:
          <input type="text" name="">
        </span><br>

        <span>
            Message :
            <textarea class="messageText" cols= "35" rows="5"></textarea>
          </span><br>

          <button >
            <a href="compose.html">Login</a> </button>        
    </form>

</div>
        

    
</body>
</html>