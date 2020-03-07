<?php
//engels mitrovic
//php Mr. helder
//asp ralph
//modelleren ralph
//javascript wetering
//burgerschap angela
//nederlands rijswijk
$courseName ="PHP";
$teacherName = "Mr. helder"
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
    //    een switch gemaakt
    switch ($courseName)
    {
        case $courseName == "nederlands" && $teacherName == "rijswijk" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "PHP" && $teacherName == "Mr. helder" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "burgerschap" && $teacherName == "angela" :
            echo "Voor het vak " ."<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "javascript" && $teacherName == "wetering" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "modelleren" && $teacherName == "ralph" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "asp" && $teacherName == "ralph" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
        case $courseName == "engels" && $teacherName == "mitrovic" :
            echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" ." als docent.";
            break;
    };

    ?>
</main>
