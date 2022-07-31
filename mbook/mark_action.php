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
	$agam=$c*$d;
	$exam=$e*$c;
	$pfam=$f*$c;
	$seat=$d-$f;
	$saam=$agam-$pfam;
	$exqt=$f-$d;
	$excam=$pfam-$agam;

	


	$in="insert into mbook (s_no, description_of_work, Rate, agreement_quantity, agreement_amount, Already_Executed_Quantity, Already_Executed_Amount, present_bill_quantity, present_final_bill_mount, Difference_Savings_Qty, Difference_Savings_Amt, Difference_ExcessQty,Difference_ExcessAmt, Remarks,parameter)
		values('$a','$b','$c','$d','$agam','$e','$exam','$f','$pfam','$seat','$saam','$exqt','$excam','$g','$h');";
	mysqli_query($con,$in);

	header('location:test.html')
?>