<?php
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "<html><body style='background-color:#$color'></body></html>";
}
?>