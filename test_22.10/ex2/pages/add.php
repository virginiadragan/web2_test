<?
require_once 'models/Masiv.php';
$numberMasiv = new Masiv ();
if(!empty($_POST['number'])) {
	echo 'Element was added';
	$numberMasiv->addElemnt($_POST['number']);
} else {
?>
<form action="" method="post">
	<input type="number" name="number">
	<br>
	<input type="submit">
</form>
<?}?>