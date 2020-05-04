<?php
/**
 * User: Muhammad Mouchli
 * Date: 01-03-2020
 * Time: 23:36
 * File: footer.php
 */
?>
<?php
include "../Hoofdstuk 3/variabelen.php";
?>
<footer id="foot">
    <h3>
        <?php
            echo $year . " ";
        //voor opdracht 6.1 de login scherm
        session_start();
        if (isset($_SESSION['username'])) {
            $bezoeker = $_SESSION['username']. "&nbsp;<a
    href='../Hoofdstuk%206/loguit.php'>Loguit</a>";
        }
        else {
            $bezoeker = "Onbekende bezoeker". "&nbsp;<a
    href='../Hoofdstuk%206/opdracht6.1.php'>Login</a>";

        }
echo $bezoeker;
        ?>
    </h3>
</footer>

