<!DOCTYPE html>
<html>
<head>
	<title>kjgdfsjs</title>
</head>
<body>
<?php

if (isset($_POST['send'])) {
	if(	mail($_POST['toemail'], $_POST['subject'], $_POST['msg']))
	{
		echo "message sended";
	}else{
		echo "Not sended";
	}

}



?>
<form method="post" action="mailsended.php">
	
to email: <input type="email" name="toemail" placeholder="enter email"><br>
subject: <input type="text" name="subject" placeholder="Type subject here">
<br>
message : <textarea name="msg" placeholder="enter message"></textarea>
<br><input type="submit" name="send" value="SEND">



</form>
</body>
</html>