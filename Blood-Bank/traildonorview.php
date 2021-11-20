<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$servername="localhost";
$username="root";
$password="";
$db="bloodbank";
//connection
$conn=new mysqli($servername,$username,$password,$db);

    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
$number = mysqli_real_escape_string($conn,$_POST['no']);
    $bg = mysqli_real_escape_string($conn,$_POST['bg']);

 $sql=$conn->query("DELETE FROM donor_registration WHERE first_name='$fname' and no='$number'and bloodgroup='$bg'");
    
      
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
        .mainbox{padding:10px;}
	.mySlides {display:none;}
</style>

    <div class="headerwrapper">
   BLOOD BANK MANAGEMENT SYSTEM
    </div>
   
     <div class="menu" style="">
       <a href="traildonorview.php">Donor View</a>
       <a href="trailinventory.php">Inventory</a>
       <a href="trailrequestview.php">Request</a>
        <a href="logout.php">Log Out</a> 
    </div>
    <div class="mainbody" >
	 <div class="mainbox">
  <?php
         $servername="localhost";
$username="root";
$password="";
$db="bloodbank";
//connection
$conn=new mysqli($servername,$username,$password,$db);
         
       $sql="SELECT * from donor_registration order by donor_id";
 $res = mysqli_query($conn, $sql);

		 ?>
         <table width="100%" border="1px" cellpadding="5px" cellspacing="0px" 
         style="font-size:13px;border-collapse: collapse;">
            <thead>
                <tr>
                   <th>S.N.</th>
                   <th>FirstName.</th>
                   <th>LastName</th>
                   <th>Age</th>
                   <th>Sex</th>
                   <th>Contact No</th>
                   <th>Address</th>
                   <th>Aadh NO.</th>
                   <th>City</th>
					<th>Bloodgroup</th>               
                </tr>
            </thead>
            <tbody>
             <?php
			 while ($row = mysqli_fetch_array($res))
             {
					
                echo   ' <tr style="font-family:arial;">
                   <td>'.$row['donor_id'].'</td>
                   <td>'.$row['first_name'].'</td>
                   <td>'.$row['last_name'].'</td>
                   <td>'.$row['age'].'</td>
                   <td>'.$row['sex'].'</td>
                   <td>'.$row['no'].'</td>
                   <td>'.$row['address'].'</td>
                   <td>'.$row['aadhar'].'</td>
                   <td>'.$row['city'].'</td>
				   <td>'.$row['bloodgroup'].'</td></tr>' ;
						
      		                                 
                  
                  
                   
				   } ?>
				
			 </tbody>
</table>
         
         <form action="traildonorview.php" method="post">
             <h1><center>Enter the Details to Delete Corresponding Donor<br/></center></h1>
    FirstName:<br/>
         <input type="text" name="fname" class="finp" required="" value=""> <br/>
         
         Contact Number <br/>
         <input type="text" name="no" class="finp" required="" value=""> <br/>
         
         Blood Group <br/>
         <input type="text" name="bg" class="finp" required="" value=""> <br/>
         
         
         <button type="submit" class="sbtn"><?php
			
				 echo "Confirm"; ?>
         
         </button>
         
         </form>
        
    </div>
    </div>
       <!-- mainbody -->
          <style>
	      .footer{background:#008b8b;padding:20px;color:#000000;font-family:"monospace",courier new,lucida console;font-weight:bold;}
	   </style>
       <div class="footer">
          Database Management Project 2017-18
       </div>

    
	 <!-- outerwrapper -->
 </body>
</html>