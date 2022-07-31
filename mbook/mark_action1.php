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
	$argmt=$c*$d;
	$exeat=$f*$d;
	$exe=$exeat-$argmt;
	

	


	$in="insert into mbook1 (si_no, description_of_work, agreement_quantity, agreement_rate, parameter, agreement_amount, Executed_quantity, Executed_Amount ,data_record, excess, remarks)
		values('$a','$b','$c','$d','$e','$argmt','$f','$exeat','$g','$exe','$h');";
	mysqli_query($con,$in);

	header('location:test1.html')
?>