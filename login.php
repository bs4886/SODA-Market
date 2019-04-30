<html>
	<head>
<meta charset="utf-8">

	</head>
	<script>

	</script>
  <body>
	
	
  <?php
   $link = mysqli_connect("localhost", "cosmos", "1234qq~", "cosmosdb");
	$idvalue =$_POST["idvalue"];
	$passvalue=$_POST["passvalue"];
	$emailvalue=$_POST["emailvalue"];

	$sql="INSERT INTO id(ID,PASS,EMAIL)VALUES('$idvalue', '$passvalue', '$emailvalue');";


	
	if($link->query($sql)) {echo "<script>alert(\"$idvalue 님 소다마켓 회원가입을 축하드립니다!\");</script>";
		echo "<script>window.location.href='https://jbit.bufs.ac.kr/~cosmos';</script>";
	
	}else {
	echo "<script>alert(\"회원가입 오류! 다시확인해주세요\");</script>";
	echo "<script>window.location.href='https://jbit.bufs.ac.kr/~cosmos/join';</script>";
	}
  ?>
  
  
  </body>
</html>