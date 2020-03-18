<?php
//engels mitrovic
//php Mr. helder
//asp ralph
//modelleren ralph
//javascript wetering
//burgerschap angela
//nederlands rijswijk
$courseName ="nederlands";

?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 07-03-2020
 * Time: 13:44
 * File: opdracht4.2.php
 */
?>
<!--de header door include tonen + de menu en de footer-->
<?php
include "../include/header.php";
include "../include/menu.php";
include "../include/footer.php";
?>
<main>
    <h2>
        Uitwerkingen
    </h2>
    <?php
    //$courseName = "php";
    //    een switch gemaakt
    switch ($courseName)
    {
        case "nederlands";
            $teacherName = "rijswijk";
            break;
        case "PHP";
            $teacherName = "Mr. helder";
            break;
        case "burgerschap" ;
            $teacherName = "angela";
            break;
        case "javascript";
        $teacherName = "wetering";
            break;
        case "modelleren";
        $teacherName = "ralph";
            break;
        case "asp";
        $teacherName = "ralph";
            break;
        case "engels";
        $teacherName = "mitrovic";
            break;
    };
    echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
    ?>
</main>
