
<?php
require_once 'models/Masiv.php';
$numberMasiv = new Masiv ();
$array = $numberMasiv->getAllElements();
foreach ($array as $key => $val) {
    echo "$val\n";
}
?>