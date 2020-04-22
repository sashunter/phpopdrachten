<?php
//array gemaakt met namen en wachtwoorden
$keys = array("Peter" => "ww", "Ben" => "ee", "Joe"=>"rr", "Johan"=>"yy", "Owij"=>"aa", "Gor"=>"qq", "Sih"=>"vv", "Rwin"=>"jj", "Muhammad"=>"Muhammad");
// 3 variabelen gemaakt
$username = $_POST["username"];
$password = $_POST["password"];
$message = "";

//een foreach loop gemaakt
foreach($keys as $theName => $pincode)
{
    //als de username gelijk is aan de naam in de array en de password gelijk is aan de ppincode in combiantie met de name dan maat de variabele showlogin "false"
    if($theName == $username && $pincode == $password)
    {
        $showlogin = "false";
        break;
    }
    else
    {
        //als de gerbuiker zijn wachtwoord en username niet invult
        if(empty($_POST['username']) && empty($_POST["password"]))
        {
            $message = "U bent vergeten uw username en wachtwoord in te vullen";
        }
        //als de gerbuiker zijn username niet invult
        elseif(empty($_POST['username']))
        {
            $message = "U bent vergeten uw username in te vullen";
        }
        //als de gebruiker zijn password niet invult
        else if(empty($_POST["password"]))
        {
            $message = "U bent vergeten uw password in te vullen";
        }
        //als de ingevoerde data niet klopt
        else
        {
            $message = "De username of het wachtwoord klopt niet.";
        }
    }
}
?>



