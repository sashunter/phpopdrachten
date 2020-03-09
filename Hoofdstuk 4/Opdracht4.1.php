<?php
//een variable hour gemaakt
date_default_timezone_set("Europe/Amsterdam");
$hour = date("H");
?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 04-03-2020
 * Time: 13:44
 * File: opdracht4.1.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<main>
    <h2>
        Uitwerkingen
    </h2>
    <?php
//    een switch gemaakt
//    switch ($hour)
//    {
//        case $hour <= 5:
//            echo "Goedenacht";
//            break;
//        case $hour <= 12:
//            echo "goedenochtend";
//            break;
//        case $hour <= 17:
//            echo "Goedenmiddag";
//            break;
//        default:
//            echo "goedenavond";
//            break;
//    };
    if ($hour <=5){
        echo "Goedenacht";
    }
    elseif($hour<= 11){
        echo "goedenochtend";
    }
    elseif($hour<= 17){
        echo "goedenmiddag";
    }
    else{
        echo "goedenavond";
    }
    ?>

</main>
