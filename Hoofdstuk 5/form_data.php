<?php
/**
 * User: Muhammad Mouchli
 * Date: 27-03-2020
 * Time: 16:44
 * File: form_data.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<head>
    <link href="5.1.css" rel="stylesheet" type="text/css">
</head>
<main>
    <h2>
        Uitwerkingen
    </h2>
<!--    een tabel gemaakt-->
    <table>
<!--        een tabel rij gemaakt-->
        <tr>
<!--            een tabel cel gemaakt-->
            <td>
                Bedrijfsnaam:
            </td>
            <td>
<!--                de ingevoerde data getoond-->
                <?php echo $_GET["bedrijfsnaam"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Voornaam:
            </td>
            <td>
                <?php echo $_GET["voornaam"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Achternaam:
            </td>
            <td>
                <?php echo $_GET["achternaam"] ?>
            </td>
        </tr>
        <tr>
            <td>
                Telefoon:
            </td>
            <td>
                <?php echo $_GET["telefoon"] ?>
            </td>
        </tr><tr>
            <td>
                E-mail:
            </td>
            <td>
                <?php echo $_GET["email"]; ?>
            </td>
        </tr><tr>
            <td>
                Bericht:
            </td>
            <td>
                <?php echo $_GET["bericht"]; ?>
            </td>
        </tr>


    </table>

</main>