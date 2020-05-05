
<?php
/**
 * User: Muhammad Mouchli
 * Date: 04-05-2020
 * Time: 17:55
 * File: welkom.php
 */
?>
    <!--de header door include tonen + de menu en de footer-->
<?php
session_start();
include "../include/header.php";
include "../include/menu.php";
?>
    <main>
        <!--    koptekst niveau 2 gemaakt-->
        <h2>
            Uitwerkingen
        </h2>
        <?php
        // een variabele gemaakt en die variabele geechod
        $massage = "Welkom op deze pagina broer";
        echo $massage;
        ?>
    </main>
<?php
include "../include/footer.php";
?>