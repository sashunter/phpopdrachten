<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 16:44
 * File: format5.3.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
include "functions.php";
?>
<head>
    <link href="" rel="stylesheet" type="text/css">
</head>
<main>
    <h2>
        Uitwerkingen
    </h2>
    <!--    een tabel gemaakt-->
    <table>
        <tr>
            <td>
                Vraag
            </td>
            <td>
                Antwoord
            </td>
        </tr>
        <tr>
            <td>
                Naam
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["voorenachternaam"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Leeftijd
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["leeftijd"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Gemeente
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["gemeente"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Inwoners
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["citizens"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Aantal besmet
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["infected"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Kenissen besmet
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_POST["besmetinwoners"] ?>
            </td>
        </tr>
        <tr>
            <td>
<!--                als de gerbuiker op ja klikt wordt de volgende code zichtbaar-->
                <?php
                if ($_POST["besmetinwoners"] == "Ja")
                {
                    echo "De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Kans per ontmoeting op besmetting
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echoKans();?>
            </td>
        </tr>
        <tr>
            <td>
                Kans is 1 op
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo getKans1Op();?>
            </td>
        </tr>
        <tr>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php
                echo vergelijkOorzaken(getKans1Op());
                ?>

            </td>
        </tr>
    </table>
</main>