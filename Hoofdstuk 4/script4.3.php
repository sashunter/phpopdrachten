<?php
/**
 * User: Muhammad Mouchli
 * Date: 11-02\3-2020
 * Time: 13:36
 * File: script4.3.php
 */
?>
<?php
$task2 = "Lancering in: ";
$counter = 19;
$task3 = "Lancering in: ";
$task4 = "";
$task5 = "";
$task6 = "";
$task7 = "";
$counter1 = 1;
$year = 2020;

//een while loop gemaakt
while($counter >=0)
{
    $task2 .= $counter . ", ";
    $counter--;
}
//een for loop gemaakt
for($teller = 19; $teller >= 0; $teller--)
{
    $task3 .= $teller . ", ";
}
//een while loop gemaakt
while($counter1 <= 6)
{
   $task4 .= "<h" . $counter1 . ">" . "Dit is de " . $counter1 . "e iteratie" . "</h" . $counter1 . ">";
   $counter1++;
}
//een for loop gemaakt
for($counter2 = 1; $counter2 <= 10; $counter2++)
{
    $task5 .=  "<td>" . "Dit is de " . $counter2 . "e iteratie"  ."</td>";
}
//een while loop gemaakt
while($year >= 2001)
{
    if($year == 2020){
        $task6 .= "<p>" . "In " .  $year ." word ik " .( $year-2001 ). " jaar" . "</p>";
    }
    elseif($year > 2001){
        $task6 .= "<p>" . "In " . $year . " was ik " . ($year-2001). " jaar". "</p>";
    }
    else{
        $task6 .= "<p>" . "In " . $year . " was ik " . " geboren". "</p>";
    }
    $year--;
}
// een for loop gemaakt
for($year1 = 2020, $birthday = 2001; $year1 >= $birthday; $year1--)
{
    $age = $year1-$birthday;
    if($age >= 18){
        $task7 .= "<p>" . "In " .  $year1 ." word ik " .( $age ). " jaar en ik  ben een adolescent" . "</p>";
    }
    elseif($age >= 12){
        $task7 .= "<p>" . "In " . $year1 . " was ik " . ($age). " jaar en ik was een puber". "</p>";
    }
    elseif($age >= 8){
        $task7 .= "<p>" . "In " . $year1 . " was ik " . ($age). " jaar en ik was een tiener". "</p>";
    }
    elseif($age >= 4){
        $task7 .= "<p>" . "In " . $year1 . " was ik " . ($age). " jaar en ik was een kleuter". "</p>";
    }
    elseif($age >= 2){
        $task7 .= "<p>" . "In " . $year1 . " was ik " . ($age). " jaar en ik was een peuter". "</p>";
    }
    else
    {
        $task7 .= "<p>" . "In " . $year1 . " was ik " . ($age). " jaar". "</p>";
    }
}
?>
