<?php
	$con=mysqli_connect ("localhost","root","", "mbook");
	if(!$con){echo "DB not connected...";}
	
	$a=$_REQUEST['t1'];
	$b=$_REQUEST['t2'];
	$c=$_REQUEST['t3'];
	$d=$_REQUEST['t4'];
	$e=$_REQUEST['t5'];
	$argmt=$b*$d;
	

	


	$in="insert into mbook4 (si_no, quantity, description_of_work, rate, unit, amount)
		values('$a','$b','$c','$d','$e','$argmt');";
	mysqli_query($con,$in);

	header('location:test4.html')
?>