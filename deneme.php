<?php
$dogruKeyler = ["skibidi123", "pomni456"];
if (isset($_GET["key"]) && in_array($_GET["key"], $dogruKeyler)) {
    echo "valid";
} else {
    echo "invalid";
}
?>
