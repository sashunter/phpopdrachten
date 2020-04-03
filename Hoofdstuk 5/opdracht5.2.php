<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 21:14
 * File: opdracht5.2.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<head>
    <link href="5.2.css" rel="stylesheet" type="text/css">
</head>
<main>
    <!--    koptekst niveau 2 gemaakt-->
    <h2>
        Uitwerkingen
    </h2>
<!--    koptekst niveau 3 gemaakt-->
    <h3>
        Uitschrijfformulier KW1C
    </h3>
    <hr>
<!--    een formulier gemaakt-->
    <form action="uitschrijving.php" method="get">
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
                    <label for="studentnr">Studentennummer</label>
                </td>
                <td>
                    <input name="studentnr" id="studentnr" type="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="datum">Datum van uitschrijving</label>
                </td>
                <td>
                    <input name="datum" id="datum" type="date">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="reden">Reden van uitschrijving</label>
                </td>
                <td>
<!--                    een drop down list gemaakt-->
                    <label>
                        <select name="reden">
                            <option value="kleine school">Kleine school</option>
                            <option value="onveilige school">Onveilige school</option>
                            <option value="niet leuk gevonden">Niet leuk gevonden</option>
                            <option value="geen gratis boeken">Geen gratis boeken</option>
                        </select>
                    </label>
                </td>
            </tr>
<!--            een fieldset gemaakt-->

            <tr>
                <td>
                    <label for="leerjaar">Leerjaar</label>
                </td>
                <td>
                    <input type="radio" name="leerjaar" value="1e leerjaar" checked="checked">1e leerjaar
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="radio" name="leerjaar" value="2e leerjaar">2e leerjaar
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="radio" name="leerjaar" value="3e leerjaar">3e leerjaar
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="aanmelden" value="Ja"> Ik wil me aanmelden bij de succesklas
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="verwijderen" value="Ja">Verwijder mijn gegevens uit het systeem
                </td>
            </tr>
            <tr>
                <td>
                    <label for="reden van uitschrijving">Geef hieronder de reden van je uitschrijving op</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
<!--                    een plek gemaakt om tekst in te zetten-->
                    <textarea name="omschrijving" id="omschrijving"></textarea>
                </td>
            </tr>
            <tr>
<!--                een submit knop gemaakt-->
                <td>
                    <input type="submit" value="Versturen">
                </td>
            </tr>
        </table>
    </form>
</main>