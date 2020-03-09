<?php

for($teller = 0; $teller <= 10; $teller++)
{
    echo "wat" . $teller . "<br>";
}

$counter = 0;
$tekst = "";

while($counter <=10)
{
    $tekst .= "hoi" . $counter . "<br>";
//    $tekst = $tekst . "hoi" . $counter . "<br>"; // dat is het zelfde als de regel hier boven
    $counter++;
}
echo $tekst;
?>
