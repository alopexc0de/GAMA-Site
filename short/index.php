<body bgcolor="black" text="greem"><div align="center">
<img src="http://unps-gama.tk/upload/Pictures/header.png"><br>
<h4>Welcome to the UnPS-GAMA page shortener</h4><br><hr><br>
<?php
include("config.php");
if(!$_POST['submit'])
	{
?>
<form action="index.php" method="POST">
  <p>Destination:<br><input name="dest" type="text" size="30" ></p>
<input type="submit" name="submit" value="submit">
</form>

<?php
	}
$dest=$_POST['dest'];
if($_POST["submit"])
	{
		if(isset($_POST['dest'])) 
			{
				$myFile = $path.$random.".html";
				$fh = fopen($myFile, 'w') or die("can't open file");
				$stringData = '

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>

<meta http-equiv="REFRESH" content="0;url='.$dest.'"></HEAD>
<BODY>
Service by '.$pagepath.'
</BODY>
</HTML>
';
				fwrite($fh, $stringData);
				fclose($fh);	
echo '
Thanks for using '.$pagetitle.' <br>
your Link is shorten link is available here:<br>
<a href='.$pagepath.$path.$random.'>'.$pagepath.$path.$random.'</a><br>
<a href="index.php">Back to index</a><br>
<a href="http://unps-gama.tk">Home</a>

';	
			}

	}
?>
