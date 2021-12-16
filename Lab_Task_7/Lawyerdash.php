<?php

   if(!empty($_POST['remember'])){
      setcookie("uname", $_POST['username'], time()+20);
      setcookie("pass", $_POST['password'], time()+20);
      
      
   }else{
    setcookie("uname", "");
    setcookie("pass", "");
    
   }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}



.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}



/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
</style>









<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('law.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background: grey;
}
.proname {
  text-align: center;
  color: white;
}
.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}


footer {
   position: absolute;
        bottom: 0;
        width: 72%;
        color: #ffffff;
        text-align: center;
        padding: 5px 0;
      background-color: DarkSalmon;
      color: white;}
</style>
</head>
<body>
  <?php
  include 'header.php';
  include 'footer.php';
  ?>


<div class="header">
  <?php
      session_start();
      if(isset($_SESSION['username'])){
         echo "<h2>Welcome Advocate ". $_SESSION['username']."<h2>";
         echo "<a href='Logout.php'>Logout</a>";
      }else{
         header("location:Login.php");
      }
  ?>
</div>

<ul>
  <li><a class="active" href="Lawyerdash.php">Dashboard</a></li>
  <li><a href="Sprisoner.php">View Prisoner</a></li>
  <li><a href="#contact">Case File Download</a></li>
  <li><a href="Meeting.php">Schedule Meeting</a></li>
  <li><a href="#about">Message</a></li>
  <li><a href="#about">My Supervise</a></li>
  <li><a href="#about">Request for Prisoner assign</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">

<h2 class="proname">Profile</h2>

<div class="card">
  <img src="lawman.jpg" alt="David" style="width:100%">
  <h1>David Kushner</h1>
  <h3>Lawyer</h3>
  <!-- <p class="title">Lawyer</p> -->
  <p>Prinstone Prison Facility</p>
  <p>Security Pass Level 3</p>
  <p><a href="aurpon10@gmail.com">david.ku@gmail.com</a></p>
  <div style="margin: 24px 0;">
    
  </div>
  
</div>


   
</div>
</body>
</html>
