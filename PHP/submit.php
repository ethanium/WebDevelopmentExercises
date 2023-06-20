<html>
<body>
<?php

if ($q == "")
	echo "Please Specify your Title!<br>";
if ($name == "")
	echo "Please Enter your Name<br>";
if ($email == "")
	echo "Please Enter you E-mail Address<br>";
if ($response == "")
	echo "Please Choice a Response<br>";
if ($comment == "")
	echo "Please Enter a Comment<br>";
if ($q != "" && $name !="" &&$email != "" && $response != "" &&$comment != "")
	echo "Feedback Uploaded Successfully";

?>

</body>
</html>