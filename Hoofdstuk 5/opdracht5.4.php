<?php
/**
 * User: Muhammad Mouchli
 * Date: 08-04-2020
 * Time: 21:14
 * File: opdracht5.4.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<style>
/*    de class green de kleur groen gegeven*/
    .green{
        color: green;
    }
    /*de class red de kleur rood gegeven*/
    .red{
        color: red;
    }
</style>
<main>
    <!--    koptekst niveau 2 gemaakt-->
    <h2>
        Uitwerkingen
    </h2>
<!--    een formulier gemaakt-->
    <form action="opdracht5.4.php" method="post">
<!--        een tabel gemaakt-->
        <table>
<!--            een tabel rij gemaakt-->
            <tr>
<!--                een tabel cel gemaakt-->
                <td>
                    Komt er een ambulance aan?
                </td>
                <td>
<!--                    een label en een input veld toegevoegd-->
                    <label><input type="radio" name="ambulanceComing" value="ja">Ja</label>
                    <label><input type="radio" name="ambulanceComing" value="nee">Nee</label>
                </td>
            </tr>
            <tr>
                <td>
                    Stop lichtkleur?
                </td>
                <td>
                    <label><input type="radio" name="trafficLightColor" value="rood">Rood</label>
                    <label><input type="radio" name="trafficLightColor" value="groen">Groen</label>
                    <label><input type="radio" name="trafficLightColor" value="oranje">Oranje</label>
                </td>
            </tr>
            <tr>
                <td>
<!--                    een submit button gemaakt-->
                    <input type="submit" value="Verzend" name="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
//        de action is hetzelfde script als het formulier, eerst testen of het formulier verzonden is
        if (isset($_POST['submit']))
        {
            echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
    //        Een van de of beide radiobuttons is/zijn niet aangevinkt
            if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing']))
            {
                echo "Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.";
            }
            else
            {
                //variabelen gemaakt van de geselecteerde data.
                $trafficLightColor = $_POST['trafficLightColor'];
                $ambulanceComing = $_POST['ambulanceComing'];
                echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
                ambulance aan.";
                //Bepalen of je wel of niet mag doorrijden
                    // Wat betekent <> voor groen???????????????????????????????????
                if ($trafficLightColor == "groen" && $ambulanceComing == 'nee')
                {
                    echo "<div class='green'>U mag doorrijden</div>";
                }
                else
                {
                     echo " <div class='red'>U moet stoppen</div>";
                }
             }
            echo "</div>";
         }
         ?>

</main>