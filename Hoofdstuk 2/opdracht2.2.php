<?php
    $text1 = "Hallo ";
    $text2 ="toch makkelijke taal ";
    $text3 = "wat is ";
    $text4 = "PHP ";
    $text5 = "nooit gedacht dat ";
    $text6 = "de ingewikkelde installatie ";
    $text7 = "Fijn toch? ";
?>
<?php
/**
 * User: Muhammad Mouchli
 * Date: 07-02-2020
 * Time: 13:40
 * File: opdracht2.2.php
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="opdracht 2.1">
        <meta name="keywords" content="keyword 1, keyword 2">
        <link href="cssstyle.css" type="text/css" rel="stylesheet">
        <title>
            PHP Professional
        </title>
    </head>
    <body>
    <main id="wrapper">
        <h2>
            Uitwerkingen
        </h2>
        <h2>
            Taak 2
        </h2>
        <p>
            <?php echo $text1, $text3, $text4, $text2; ?>
        </p>
        <p>
            <?php echo $text3, $text6, $text7; ?>
        </p>
        <p>
            <?php echo $text5, $text4, $text2, $text3 ?>
        </p>
        <p>
            Hallo.
        </p>
        <p>
            <?php echo $text7, "dat ", $text4, $text2, "is" ?><br>
            <?php echo $text6, "is best moielijk, vind je niet?" ?>
        </p>


    </main>
    </body>
</html>
