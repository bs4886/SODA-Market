 	
  <?php
 session_start();?>
<html>
	<head>
<meta charset="utf-8">

	</head>
	<script>

	</script>
  <body>
	<?php

   $link = mysqli_connect("localhost", "cosmos", "1234qq~", "cosmosdb");
	$okid =$_POST["okid"];
	$okpass=$_POST["okpass"];	

	$sql="select * from id WHERE ID='$okid' and PASS='$okpass';";
	$result = $link->query($sql);

	if($result->num_rows>= 1) {
       echo "<script>alert(\"로그인됨\");</script>";
	  
	  
		$_SESSION["id"]=$okid;
			





	
	    echo "<script>window.location.href='https://jbit.bufs.ac.kr/~cosmos';</script>";
	   
	}else {
	 echo "<script>alert(\"로그인안됨\");</script>";
	 echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~cosmos/sodalogin';</script>";
	
	}

  ?>
  
  
  </body>
</html>