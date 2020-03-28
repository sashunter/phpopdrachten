<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 21:44
 * File: uitschrijving.php
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
    <h2>
        Uitwerkingen
    </h2>
<!--    een tabel gemaakt-->
    <table>
        <tr>
            <td>
                Voor en achternaam
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["voorenachternaam"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Studentennummer
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["studentnr"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Datum van uitschrijving
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["datum"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["reden"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Leerjaar
            </td>
            <td>
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["leerjaar"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Aanmelden bij de succesklas
            </td>
            <td>
                <!--                als de gebruiker de checkbox aan finkt wordt er ja getoond en anders "niet aangemeld"-->
                <?php
                if ($_GET["aanmelden"] == "Ja")
                {
                    echo "Ja";
                }
                else
                {
                    echo "Niet aangemeld";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Verwijderen gegevens
            </td>
            <td>
<!--                als de gebruiker de checkbox aan finkt wordt er ja getoond en anders "gegevens hoeven niet te worden verwijderd"-->
                <?php
                if ($_GET["verwijderen"] == "Ja")
                {
                    echo "Ja";
                }
                else
                {
                    echo "Gegevens hoeven niet te worden verwijderd";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <!--                de ingevoerde data getoond-->
                <?php echo $_GET["omschrijving"] ?>
            </td>
        </tr>

    </table>
</main>