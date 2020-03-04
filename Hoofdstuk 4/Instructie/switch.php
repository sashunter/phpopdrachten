<?php
$day = date("l");

switch ($day)
{
    case "Monday":
        echo "Het is maandag";
        break;
    case "Tuesday":
        echo "Het is dinsdag";
        break;
    case "Wednesday":
        echo "Het is woensdag";
        break;
    default:
        echo "Het is een adnere dag";
        break;
};
?>
