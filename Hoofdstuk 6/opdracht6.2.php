<?php
/**
 * User: Muhammad Mouchli
 * Date: 04-05-2020
 * Time: 17:44
 * File: opdracht6.2.php
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
<!--    een koptekst niveau 3 gemaakt-->
    <h3>
        Speel het spel steen papier schaar.
    </h3>
<!--    een formulier gemaakt met de methode get-->
    <form method="get" action="opdracht6.2.php">
        <label>
<!--            3 inputs gemaakt met daarnaast een image-->
            <input type="radio" value="steen" id="rock" name="choice">
            <img src="steen.png">
            <input type="radio" value="papier" id="paper" name="choice">
            <img src="papier.png">
            <input type="radio" value="schaar" id="sizer" name="choice">
            <img src="schaar.png">
        </label>
        <br>
        <input type="submit" name="submit">
        <br>
    </form>
<?php
session_start();
$_SESSION['user1'] = 0;
$_SESSION['user2'] = 0;

//als de gebruiker een keuze maakt en op de knop submit klikt, dan wordt de keuze gezien.
if (isset($_GET['submit'])) {

    echo "Jij koos: <img src='{$_GET['choice']}.png'>";
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: <img src='{$computerkeuze}.png'>"."<br>" ."<br>";
}
if($_GET["choice"] == "steen" && $computerkeuze == "steen" || $_GET["choice"] == "papier" && $computerkeuze == "papier" || $_GET["choice"] == "schaar" && $computerkeuze == "schaar"){
    echo "Gelijk! <br>";
}
elseif ($_GET["choice"] == "papier" && $computerkeuze == "steen" || $_GET["choice"] == "steen" && $computerkeuze == "schaar" || $_GET["choice"] == "schaar" && $computerkeuze == "papier"){
    echo "Jij scoort! <br>";
    $_SESSION['user1']++;
}
elseif ($_GET["choice"] == "steen" && $computerkeuze == "papier" || $_GET["choice"] == "schaar" && $computerkeuze == "steen" || $_GET["choice"] == "papier" && $computerkeuze == "schaar"){
    echo "De computer scoort! <br>";
    $_SESSION['user2']++;
}
echo "Het staat " . $_SESSION['user1'] . " tegen " . $_SESSION['user2'] . "<br>";

if($_SESSION['user1'] == 5)
{
    echo "Jij hebt gewonnen.";
    session_destroy();
}
if ($_SESSION['user2'] == 5){
    echo "De computer heeft gewonnen!";
    session_destroy();
}


?>
</main>
<?php
include "../include/footer.php";?>