<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$servername="localhost";
$username="root";
$password="";
$db="bloodbank";
//connection
$conn=new mysqli($servername,$username,$password,$db);

    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
$sex = mysqli_real_escape_string($conn,$_POST['sex']);
    $cn = mysqli_real_escape_string($conn,$_POST['cn']);
$add = mysqli_real_escape_string($conn,$_POST['add']);
    $aad = mysqli_real_escape_string($conn,$_POST['aad']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
    $bg = mysqli_real_escape_string($conn,$_POST['bg']);

    
    $sql=$conn->query( "INSERT INTO donor_registration values
		          (NULL,'$fname','$lname','$age','$sex',
							'$cn','$add','$aad','$city','$bg')");
    if($sql==TRUE)
        $_SESSION['dataadded']="yes";
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
        
	input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
        
   .smsg{border: 2px solid black; text-align:center; width:400px; color:#FFFFFF; background: #867474; 
	padding:20px; margin-bottom:20px;}    
        
    
        
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
    
	<h3>Enter Your Details</h3>

<div>
    <?php if(isset($_SESSION["dataadded"])){ ?>
                            <div class="form-group">ADDED SUCCESSFULLY</div>
                            <?php } ?>
  <form action="traildonor.php" method="post">
    First Name:</br>
         <input type="text" name="fname" class="finp" required="" value=""> <br/>
         
         Last Name: <br/>
         <input type="text" name="lname" class="finp" required="" value=""> <br/>
         
         Age: <br/>
         <input type="text" name="age" class="finp" required="" value=""> <br/>
         
         Sex: <br/>
         <select name="sex" class="finp">
         <option value="male">Male</option>
         <option value="female">Female</option>
         </select></br>
         
         Contact NO:<br/>
         <input type="text" name="cn" class="finp" required="" value=""> <br/>
         
         Address: <br/>
         <input type="text" name="add" class="finp" required="" value=""> <br/>
         
         Aadhar NO: <br/>
         <input type="text" name="aad" class="finp" required="" value=""> <br/>
         
         City:<br/>
         <input type="text" name="city" class="finp" required="" value=""> <br/>
         Bloodgroup:<br/>
         <select name="bg" class="finp">
         <option value="A+">A+</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B-">B-</option>
         <option value="O+">O+</option>
         <option value="O-">O-</option>
         <option value="AB+">AB+</option>
         <option value="AB-">AB-</option>
         </select></br>
         
         <button type="submit" class="sbtn"><?php
			
				 echo "Submit";
			 
		 
		?>
             </button>
    </form>
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