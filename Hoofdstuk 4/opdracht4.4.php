<?php
/**
 * User: Muhammad Mouchli
 * Date: 20-03-2020
 * Time: 17:44
 * File: opdracht4.4.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<main>
    <!--    een koptekst niveau 2 gemaakt-->
    <h2>
        Uitwerkingen
    </h2>
    <!--    een koptekst niveau 3 gemaakt-->
    <h3>
        Kalender van volgende week:
    </h3>
<!--    php code gemaakt-->
    <?php
    //een for loop gemaakt
    for($i = 0; $i <= 7;  $i++) {
        $adder = strtotime("+" . $i . "days");
        $dayNumber = date('w', $adder);
        $fullDate = date('l d-n-Y', $adder);
        echo "Dag " . $dayNumber . " is " . $fullDate."<br>";
    }
    ?>
</main>
