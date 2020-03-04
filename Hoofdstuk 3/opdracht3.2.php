<?php
//een variable aangemaakt
$trafficLightColor = "groen";
$ambulanceComing = false;
$driveOn = true;
?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 21-02-2020
 * Time: 10:10
 * File: opdracht3.2.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<!--een main aangemaakt-->
<main>
<!--    een koptekst niveau 2 element-->
    <h2>
        Uitwerkingen
    </h2>

    <?php
//    een if else statement gemaakt
    if ($trafficLightColor == "groen" && $ambulanceComing == false){
        $driveOn = true;
    }
    else if($ambulanceComing == true || $trafficLightColor == "rood" || $trafficLightColor == "oranje"){
        $driveOn = false;
    }

    // if else statement voor driveon
    if( $driveOn == true)
    {
        echo "<p id='green'>" . "U mag doorrijden" . "</p>";
    }

    elseif ( $driveOn == false)
    {
        echo "<p id='red'>" . "U moet stoppen" . "</p>";
    }
    // initialiseren en declareren van variabelen
    $countryName = "Nederland"; // string
    $currentAge = 16; // integer

//    if($country == "NL" || $country == "BE")


    // if/ else if/ else statement van countryname en currentage
    if($countryName == "Bulgarije" || $countryName == "Nederland" || $countryName == "Zweden" && $currentAge < 18)

    {
        echo "niet";
    }

    else if($countryName == "België" && $currentAge < 16)

    {
        echo "niet";
    }

    else if($countryName == "Cyprus" && $currentAge <= 17)

    {
        echo "niet";
    }

    else if($countryName == "Bulgarije" && $currentAge >= 18 || $countryName == "België" && $currentAge >= 18 || $countryName == "Nederland" && $currentAge >= 18)

    {
        echo "alle drank";
    }

    else if($countryName == "Cyprus" && $currentAge > 17)

    {
        echo "alle drank";
    }

    else if($countryName == "Zweden" && $currentAge >= 20)

    {
        echo "alle drank";
    }

    elseif ($countryName == "Zweden" && $currentAge < 18){
        echo "niet";
    }
    ?>

</main>
