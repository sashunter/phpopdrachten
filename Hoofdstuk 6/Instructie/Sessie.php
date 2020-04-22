<?php
//SESSION aanmaken
session_start();
$_SESSION["firstname"] = $_POST["firstname"];
echo $_SESSION["firstname"];
?>
