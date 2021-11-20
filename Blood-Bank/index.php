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
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
   <p style="padding:10px;line-height:27px;text-align:justify;">
   Blood Banks can collect blood from many donators in short from various sources and distribute that blood to needy people who require blood. The blood bank management system is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank.
   </p>
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2seconds
}
</script>

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