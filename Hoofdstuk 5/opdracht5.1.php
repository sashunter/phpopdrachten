<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 16:44
 * File: opdracht5.1.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<main>
<!--    koptekst niveau 2 gemaakt-->
    <h2>
        Uitwerkingen
    </h2>
<!--    koptekst niveau 3 gemaakt-->
    <h3>
        Restaria Kees Kroket
    </h3>
<!--    een paragraaf gemaakt-->
    <p>
        Visstraat 12 <br>
        5320 DN Oisterwijk <br>
        042 2342 2442 <br>
        info@hotmaijksd.ratatata
    </p>
<!--    een formulier gemaakt-->
    <form action="form_data.php" method="get">
<!--        een lebel gemaakt-->
        <label for="bedrijfsnaam">Bedrijfsnaam</label>
        <br>
<!--        een input veld gemaakt-->
        <input type="text" id="bedrijfsnaam" name="bedrijfsnaam">
        <br>
        <label for="voornaam">Voornaam</label>
        <br>
        <input type="text" id="voornaam" name="voornaam">
        <br>
        <label for="achternaam">Achternaam</label>
        <br>
        <input type="text" id="achternaam" name="achternaam">
        <br>
        <label for="telefoon">Telefoon</label>
        <br>
        <input type="number" id="telefoon" name="telefoon">
        <br>
        <label for="email">E-mail</label>
        <br>
        <input type="email" id="email" name="email">
        <br>
        <label for="bericht">Bericht</label>
        <br>
<!--        <input type="text" id="bericht" name="bericht">-->
        <textarea name="bericht" id="bericht"></textarea>
        <br>
<!--        een submit button gemaakt-->
        <input type="submit" value="versturen">


    </form>
</main>