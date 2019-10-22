<?
if(!empty($_POST['number'])) {
	$_SESSION['myNumbers'][] = $_POST['number'];
} 
?>
<form action="" method="post">
	<input type="number" name="number">
	<br>
	<input type="submit">
</form>