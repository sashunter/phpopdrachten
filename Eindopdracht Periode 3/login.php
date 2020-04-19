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
<?php
//een variabele gemaakt
$showlogin = "true";
//als de username en password mee worden gestuurd
if(isset($_POST['username']) || isset($_POST["password"])) {
    include "Script.php";
}
?>
<main>
<!--        koptekst niveau 2 gemaakt-->-->
    <h2>
        Uitwerkingen
    </h2>
    <h3>
        Bergheen
    </h3>
<!--    als de variabele showlogin de waarde "true" heeft, dan laat hij de onderstaande HTML code zien-->
    <?php
    if($showlogin = "true")
    {
        ?>
        <p>
            Login om onze adresgegevens + openingstijden te zien
        </p>
        <?php
        //de variabele $message geechod
        echo $message;
        ?>
<!--        een formulier gemaakt-->
        <form action="login.php" method="post">
<!--            een tabel gemaakt-->
            <table>
                <tr>
                    <td>
<!--                        een lebel gemaakt-->
                        <label for="username">Username</label>
                    </td>
                    <td>
<!--                        een input veld gemaakt-->
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="login" name="login">
                    </td>
                </tr>
            </table>
        </form>
        <?php
    }
//    en anders laat hij de onderstaande HTML code zien.
    else
    {
    ?>
<!--        koptekst niveau 3 gemaakt-->
        <h3>
            Welkom
        </h3>
<!--        koptekst niveau 4 gemaakt-->
        <h4>
            Openingstijden
        </h4>
<!--        een paragraaf gemaakt-->
        <p>
            Do: 22:00<br>
            Vr: All day<br>
            Za: All Day<br>
            Zo: 12:00<br>
        </p>
        <h4>
            Adresgegevens
        </h4>
        <p>
            Am Wriezener Bahnhof<br>
            10243 Berlin<br>
            Duitsland
        </p>
    <?php
    }

    ?>
</main>

