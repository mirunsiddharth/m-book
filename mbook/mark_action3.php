<?php
	$con=mysqli_connect ("localhost","root","", "mbook");
	if(!$con){echo "DB not connected...";}
	
	$a=$_REQUEST['t1'];
	$b=$_REQUEST['t2'];
	$c=$_REQUEST['t3'];
	$d=$_REQUEST['t4'];
	$e=$_REQUEST['t5'];
	$f=$_REQUEST['t6'];
	$g=$_REQUEST['t7'];
	
	$argmt=$c*$d*$e*$f*$g;
	

	


	$in="insert into mbook3 (si_no, description_of_work, no_one, no_two, length, bredth, depth, total)
		values('$a','$b','$c','$d','$e','$f','$g','$argmt');";
	mysqli_query($con,$in);

	header('location:test3.html')
?>