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
	$h=$_REQUEST['t8'];
	$i=$_REQUEST['t9'];
	$amt=$c*$d;
	$pamt=$g*$d;
	$lamt=$h*$d;
	


	$in="insert into mbook5 (si_no, description_of_work, qty, rate, per, amount, rn, pqt, pam, lqt, lam, remark)
		values('$a','$b','$c','$d','$e','$amt','$f','$g','$pamt','$h','$lamt','$i');";
	mysqli_query($con,$in);

	header('location:test5.html')
?>