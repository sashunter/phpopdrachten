<?php
//een string aangemaakt
$evenement = "Elfstedentocht";
$name = "Alvestedetocht";
$kilometernr = 200;
$natuurijs = "netuurijs";
$organize = "Koninklijke Vereniging De Friesche Elf Steden";
$city = "Leeuwaarden";
$province = "Friesland";
$round = "Elfstedentocht";
$time = 15;
$year = 1909;
$times = 1;
$story = "De " . $evenement . " (Fries: ". $name . ") is een ". $kilometernr. " kilometer lange ". $natuurijs. " die wordt georganiseerd door de ". $organize. ". ". $city. ", de hoofdstad van ". $province. ", is start- en aankomstplaats. De ". $round. " is inmiddels ". $time . " maal verredem en werd voor het eerst in ". $year . " gereden en wordt maximaal ". $times ." keer per winter gehouden.";
?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 17-02-2020
 * Time: 13:40
 * File: opdracht3.1.php
 */
?>
<?php
include "../include/header.php";
include "../include/menu.php";
include  "../include/footer.php";

?>
<main id="wrapper">
    <h2>
        Uitwerkingen
    </h2>

        <?php echo "<p>" . $story . "</p>";?>

</main>

