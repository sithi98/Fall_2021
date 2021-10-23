<?php

session_start();
 
$validateuniversity="";
$validatedegree="";
$validatemajor="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $university=$major=$degree="";

if(strlen($_POST["university"])<4)
{
    $validateuniversity= "Must be grater than 4 charecter";

}
else
{
    $university=$_REQUEST["university"];
}

if(strlen($_REQUEST["degree"])<2)
{
    $validatedegree= "Must be grater than 2 charecter";

}
else
{
    $degree=$_REQUEST["degree"];
}

if(strlen($_REQUEST["major"])<1)
{
    $validatemajor= "Must be grater than 1 charecter";

}
else
{
    $major=$_REQUEST["major"];
}



if($university=="" || $major=="" || $degree=="")
{
    echo "Failed.";
}

}

?>