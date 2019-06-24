<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="check.php">
	<input type="text" name="sun" placeholder="enter a value" autofocus="autofocus">
	<input type="submit" name="submit" value="Done">
</form>
</body>
</html>
<?php
if (isset($_POST['submit']))
 {
 	$val = $_POST['sun'];
 	if (strtoupper($val) == 'TSUNAMI')
 	 {
 	 	?>
 	 	<audio controls autoplay>
  <source src="cheap_thrills.mp3" type="audio/mp3">
  
</audio>


 	 	<?php
 		
 	}
 	else{
 		?>

 		<script type="text/javascript">
 			alert('No Tsunami Detected...');
 		</script>


 		<?php
 	}
}
?>