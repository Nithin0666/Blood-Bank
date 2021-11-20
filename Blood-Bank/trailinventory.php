<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$servername="localhost";
$username="root";
$password="";
$db="bloodbank";
//connection
$conn=new mysqli($servername,$username,$password,$db);

    $id = mysqli_real_escape_string($conn,$_POST['id']);
$q = mysqli_real_escape_string($conn,$_POST['q']);
    

 $sql=$conn->query("UPDATE inventory SET quantity='$q' WHERE id='$id'");
    
      
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
         
       $sql="SELECT * from inventory order by id";
 $res = mysqli_query($conn, $sql);

		 ?>
         <table width="100%" border="1px" cellpadding="5px" cellspacing="0px" 
         style="font-size:13px;border-collapse: collapse;">
            <thead>
                <tr>
                   <th>I.D</th>
                   <th>Blood Group</th>
                   <th>Quantity</th>
                               
                </tr>
            </thead>
            <tbody>
             <?php
			 while ($row = mysqli_fetch_array($res))
             {
					
                echo   ' <tr style="font-family:arial;">
                   <td>'.$row['id'].'</td>
                   <td>'.$row['bgroup'].'</td>
                   <td>'.$row['quantity'].'</td>
                   </tr>' ;
						
      		                                 
                  
                  
                   
				   } ?>
				
			 </tbody>
</table>
         
         <form action="trailinventory.php" method="post">
             <h1><center>Enter the Details to Update Corresponding Blood Inventory<br/></center></h1>
    ID:<br/>
         <input type="text" name="id" class="finp" required="" value=""> <br/>
         
         Quantity <br/>
         <input type="text" name="q" class="finp" required="" value=""> <br/>
         
         
         
         
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