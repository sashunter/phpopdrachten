<?php
//een string aangemaakt
    $text1 = "Hallo ";
//een string aangemaakt
    $text2 ="toch makkelijke taal ";
//een string aangemaakt
    $text3 = "wat is ";
//een string aangemaakt
    $text4 = "PHP ";
//een string aangemaakt
    $text5 = "nooit gedacht dat ";
//een string aangemaakt
    $text6 = "de ingewikkelde installatie ";
//een string aangemaakt
    $text7 = "Fijn toch? ";
?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 07-02-2020
 * Time: 13:40
 * File: opdracht2.2.php
 */
?>
<?php
include "../include/header.php";
include "../include/menu.php";
include  "../include/footer.php";
?>
    <main id="wrapper">
        <h2>
            Uitwerkingen
        </h2>
<!--        een h2 element-->
        <h2>
            Taak 2
        </h2>
        <p>
            <?php echo "<p>" . $text1. $text3. $text4  . $text2 . "</p>"; ?>
        </p>
        <p>
            <?php echo $text3, $text6, $text7; ?>
        </p>
        <p>
            <?php echo $text5, $text4, $text2, $text3; ?>
        </p>
        <p>
            <?php echo $text1;?>
        </p>
        <p>
            <?php echo $text7 . "dat " . $text4 . $text2 . "is"; ?><br>
            <?php echo $text6 . "is best moielijk, vind je niet?"; ?>
        </p>


    </main>

