<?php
//array gemaakt met namen en wachtwoorden
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);
//de ingevoerde dara opgeslagen in een variabele
$nameUser = $_POST['username'];
$pwUser = $_POST['password'];
//een foreach gemaakt
foreach($authUsers as $theName => $pincode)
{
    if ($theName == $nameUser && $pincode == $pwUser)
    {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
        break;
    }
    else {
        $message = "Ongeldige username/wachtwoord
        {$_POST['username']}, probeer het nog eens.";
        include "opdracht6.1.php";

    }
}
?>