<?php
/**
 * User: Muhammad Mouchli
 * Date: 04-05-2020
 * Time: 17:44
 * File: opdracht6.1.php
 */
?>
    <!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
?>
    <main>
        <!--    koptekst niveau 2 gemaakt-->
        <h2>
            Uitwerkingen
        </h2>
<!--        een formulier gemaakt-->
        <form action="checklogin.php" method="post">
<!--            een label gemaakt-->
            <label for="username">
                Username
            </label>
            <br>
<!--            een input veld gemaakt-->
            <input id="username" name="username" type="text">
            <br>
            <label for="password">
                Wachtwoord
            </label>
            <br>
            <input id="password" name="password" type="password">
            <br>
            <br>
            <input type="submit" value="Verzend">
        </form>
        <?php echo $message; ?>
    </main>
<?php
include "../include/footer.php";
?>