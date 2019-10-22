
<br>
<?php
arsort($_SESSION['myNumbers']);
foreach ($_SESSION['myNumbers'] as $key => $val) {
    echo "$val\n";
}
?>