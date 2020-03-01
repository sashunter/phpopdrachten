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
<?php
include "../include/header.php";
include "../include/menu.php";
include  "../include/footer.php";
?>
<main>
    <?php
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

    else if ( $driveOn == false)
    {
        echo "<p id='red'>" . "U moet stoppen" . "</p>";
    }
    // initialiseren en declareren van variabelen
    $countryName = "Nederland"; // string
    $currentAge = 16; // integer


    // if/ else if/ else statement van countryname en currentage
    if($countryName == "Bulgarije" && $countryName == "Nederland" && $countryName == "Zweden" && $currentAge < 18)

    {
        echo "niet";
    }

    else if($countryName == "België" && $currentAge <= 16)

    {
        echo "niet";
    }

    else if($countryName == "Cyprus" && $currentAge <= 17)

    {
        echo "niet";
    }

    else if($countryName == "Bulgarije" && $countryName == "België" && $countryName == "Nederland" && $currentAge >= 18)

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

    else {
        echo "alleen zwakke";
    }
    ?>

</main>
