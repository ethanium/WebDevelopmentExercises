<html>
<body>
<?php

if ($price == "")
	echo "Please Specify the Price!<br>";
if ($qty == "")
	echo "Please Specify the Quantity<br>";
if ($disc == "")
	echo "Please Specify the Discount<br>";
if ($tx == "")
	echo "Please Specify the Tax<br>";
if ($py == "")
	echo "Please Specify the Number of Payments to make<br>";
if ($price != "" && $qty !="" &&$disc != "" && $tx != "" &&$py != "")

	{
	  $price=$price*1.0;
	  $qty=$qty*1;
	  $disc=$disc*1.0;
	  $tx=$tx*1.0;
	  $py=$py*1.0;
	  
	  if ($qty >= 10)
		  $totdisc=($disc/100)*($price*$qty);
      else
      	  $totdisc=0;
      	  
	  $tottax=($tx/100)*$price;	
	  $Total=($price * $qty)-$totdisc - $tottax ;
	  
	 echo "The Total Price is ".$Total;
	}	

?>
</body>
</html>