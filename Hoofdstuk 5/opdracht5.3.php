<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 21:14
 * File: opdracht5.3.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<head>
    <link href="" rel="stylesheet" type="text/css">
</head>
<main>
    <!--    koptekst niveau 2 gemaakt-->
    <h2>
        Uitwerkingen
    </h2>
    <!--    koptekst niveau 3 gemaakt-->
    <h3>
        Corona enquete:
    </h3>
    <hr>
    <!--    een formulier gemaakt-->
    <form action="format5.3.php" method="post">
        <!--        een tabel gemaakt-->
        <table>
            <!--            een tabel rij gemaakt-->
            <tr>
                <!--                een tabel cel gemaakt-->
                <td>
                    <!--                    een lebel gemaakt-->
                    <label for="voorenachternaam">Voor en achternaam</label>
                </td>
                <td>
                    <!--                    een input veld gemaakt-->
                    <input name="voorenachternaam" id="voorenachternaam" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="leeftijd">Leeftijd</label>
                </td>
                <td>
                    <input name="leeftijd" id="leeftijd" type="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gemeente">Gemeente</label>
                </td>
                <td>
                    <!--                    een drop down list gemaakt-->
                    <label>
                        <select name="gemeente">
                            <option value="denbosch">Denbosch</option>
                            <option value="oisterwijk">Oisterwijk</option>
                            <option value="Tilburg">Tilburg</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="citizens"> Aantal inwoners gemeente</label>
                </td>
                <td>
                    <input type="number" name="citizens" id="citizens">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="besmet inwoners">Ken je mensen die besmet zijn?</label>
                </td>
                <td>
                    <label><input type="radio" name="besmetinwoners" value="Ja">Ja</label>
                    <label><input type="radio" name="besmetinwoners" value="Nee">Nee</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="infected">Aantal ziekenhuis opnames in je woonplaats</label>
                </td>
                <td>
                    <input type="number" name="infected" id="infected">
                </td>
            </tr>
            <tr>
                <!--                een submit knop gemaakt-->
                <td>
                    <input type="submit" value="Verzend">
                </td>
            </tr>
        </table>
    </form>
</main>
