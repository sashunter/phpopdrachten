<?php
//array gemaakt met namen en wachtwoorden
$key = array("Peter"=>"ww");
//, "Ben"=>"ee", "Joe"=>"rr", "Johan"=>"yy", "Owij"=>"aa", "Gor"=>"qq", "Sih"=>"vv", "Rwin"=>"jj", "Muhammad"=>"Muhammad"
$username = $_POST["username"];
$password = $_POST["password"];
$message = "";
$showlogin = true;

foreach($key as $name => $pincode)
{
    if($username == $name && $password == $pincode)
    {
        $showlogin = false;
    }
    else
    {
        if(empty($_POST['username']) && empty($_POST["password"]))
        {
            $message = "U bent vergeten uw username en wachtwoord in te vullen";
        }
        elseif(empty($_POST['username']))
        {
            $message = "U bent vergeten uw username in te vullen";
        }
        else if(empty($_POST["password"]))
        {
            $message = "U bent vergeten uw password in te vullen";
        }
        else
        {
            $message = "De username of het wachtwoord klopt niet." . $username . "AA".  $password .  "AA".$name . "AA". $pincode;

        }
    }
}

?>


