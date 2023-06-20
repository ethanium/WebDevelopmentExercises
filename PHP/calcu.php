<html>
<body>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Calculator</title>
</head>

<body align="center" bgcolor="#99CCFF">

<?php
if (isset($B1))
	$Text1=$Text1."1";
elseif (isset($B2))
	$Text1=$Text1."2";
elseif (isset($B3))
	$Text1=$Text1."3";
elseif (isset($B4))
	$Text1=$Text1."4";
elseif (isset($B5))
	$Text1=$Text1."5";
elseif (isset($B6))
	$Text1=$Text1."6";
elseif (isset($B7))
	$Text1=$Text1."7";
elseif (isset($B8))
	$Text1=$Text1."8";
elseif (isset($B9))
	$Text1=$Text1."9";
elseif (isset($B0))
	$Text1=$Text1."0";
elseif (isset($Badd))
	{
	 $num1=$Text1*1;
	 $op=1;
	}
elseif (isset($Bsub))
	{
	 $num1=$Text1*1;
	 $op=2;
	}
elseif (isset($Bmul))
	{
	 $num1=$Text1*1;
	 $op=3;
	}
elseif (isset($Bdiv))
	{
	 $num1=$Text1*1;
	 $op=4;
	}
	?>
	
<form method="get" action="calcu.php" >

  <p><input type="text" name="Text1" size="22" value="<?php print $Text1; ?>"" > </p>

  <p><input type="submit" value="   7   " name="B7"><input type="submit" value="   8   " name="B8"><input type="submit" value="   9   " name="B9"><input type="submit" value="   *   " name="Bmul"></p>

  <p><input type="submit" value="   4   " name="B4"><input type="submit" value="   5   " name="B5"><input type="submit" value="   6   " name="B6"><input type="submit" value="   /   " name="Bdiv"></p>
  <p><input type="submit" value="   1   " name="B1"><input type="submit" value="   2   " name="B2"><input type="submit" value="   3   " name="B3"><input type="submit" value="   +   " name="Badd"></p>
  <p><input type="submit" value="   -   " name="Bsub"><input type="submit" value="   0   " name="B0"><input type="button" value="compute" name="Bcompute"></p>
  <p>&nbsp;</p>
</form>
</body>
</html>
