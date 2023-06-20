<html>
<body>
<?php

if ($fname == "")
	echo "Please Enter your First Name<br>";
if ($lname == "")
	echo "Please Enter your Lasst Name<br>";
if ($add == "")
	echo "Please Enter your Address<br>";
if ($age == "")
	echo "Please Specify your Age<br>";
if ($salary == "")
	echo "Please Specify your Salary<br>";
if ($q == "")
	echo "Please Choose a Package<br>";
if ($fname != "" && $lname !="" && $add != "" && $age != "" && $salary != "" &&$q != "")

	{
	 if ($q=="1")
	 	$loan=5000;
	 elseif($q=="2")
	 	$loan=10000;
	 elseif($q=="3")
	 	$loan=20000;
		
	 $salary= $salary*1.0;
	 $age=$age*1.0;

	 $salalow=$salary/2;
	 $agealow=(($age/10-($age % 10))-1)*-1;
	 $loanalow=$salalow*$agealow;
				
	if ($loan <= $loanalow)
		echo "Yes, ".$fname." ".$lname.", we are delighted to accept your application.";
	else
		echo "Sorry, ".$fname." ".$lname.", we cannot accept your application at this time!";
	}	

?>
</body>
</html>