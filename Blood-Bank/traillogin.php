<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form     
$servername="localhost";
$username="root";
$password="";
$db="bloodbank";
//connection
$conn=new mysqli($servername,$username,$password,$db);
//fetch from form
$myusername = mysqli_real_escape_string($conn,$_POST['username']);
$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
//query to select data matching the form data    
$sql = "SELECT * FROM login where username='$myusername' ";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
     if($mypassword==$row['password'])
     {
         header("location:traildonorview.php");
     }
}
?>



<html>
<body>
    <style>
 body{margin:0px;font-family:verdana;}
 .finp{border:1px solid #bbb;padding:10px;width:100%;max-width:400px;margin-top:10px;margin-bottom:20px;
      font-family:verdana;font-size:15px;}
 .finp:focus{background:#eee;}
 .sbtn{border:0px;padding:10px 50px;font-family:verdana;font-size:15px;background:#069;color:#fff;
        margin-bottom:20px;}
 .msg{padding:20px;margin:10px;}
 .msg-error{background:#FC9;border:2px solid #900;}
 .msg-success{background:#9C3;border:2px solid #060;}
</style>
    
    <style>
  .headerwrapper{background:#008b8b;padding:50px 20px;font-size:40px;text-align:center;font-family:"monospace",courier new,lucida console;font-weight:bold;}
  .menu{background:#ff1493;text-align:center;padding:20px;font-family:"arial";}
  .menu a, .menu:visited{color:#000000;text-decoration:none;padding:10px 20px;}
  .menu a:hover{text-decoration:underline;}
        <style>
  .headerwrapper{background:#008b8b;padding:50px 20px;font-size:40px;text-align:center;font-family:"monospace",courier new,lucida console;font-weight:bold;}
  .menu{background:#ff1493;text-align:center;padding:20px;font-family:"arial";}
  .menu a, .menu:visited{color:#000000;text-decoration:none;padding:10px 20px;}
  .menu a:hover{text-decoration:underline;}
	.mainbody{padding:100px;}
        .mainbox{padding:10px;}
	.mySlides {display:none;}
</style>

    <div class="headerwrapper">
   BLOOD BANK MANAGEMENT SYSTEM
    </div>
    <div class="menu">
        <a href="index.php">Home</a>
       <a href="traildonor.php">Donor Registration</a>
       <a href="trailrequest.php">Request Blood</a>
       <a href="traillogin.php">Admin Login</a>
	
	  
    </div>
    <div class="mainbody" >
	 <div class="mainbox">
        <style>
	.login{border:2px solid grey;
		width:420px; padding:20px;
		
	}
         </style>

<div class="login">
<form action="traillogin.php" method="post">
	Username:</br>
	<input type="text" name="username" class="finp"> <br/>
Password: <br/>
         <input type="password" name="password" class="finp"><br/>
         <button type="submit" class="sbtn">Login</button>
         </div>
    </div>
    </div>
       <!-- mainbody -->
          <style>
	      .footer{background:#008b8b;padding:20px;color:#000000;font-family:"monospace",courier new,lucida console;font-weight:bold;}
	   </style>
       <div class="footer">
          Database Management Project 2020-21
       </div>

    
	 <!-- outerwrapper -->
 </body>
</html>