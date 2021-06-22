<?php
$validatename="";
$validateemail="";
$validatepass="";
$validatecheckbox="";
$validateradio="";
$h1=$h2=$h3="";
$name=$email=$gender=$hobby="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "[!! you must enter your name!!] ";

}
else
{
    $name=$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="[!! you must enter valid email!!]";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<3))
{
    $validatepass= "[!! you must enter password!!]";

}
else
{
    $password=$_REQUEST["password"];
}


if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
{
    $validatecheckbox = "[!! please choose your hobby!!]";
    
}
else{
   if(isset($_REQUEST["hobby1"]))
   {
        $h1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
        $h2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
        $h3= $_REQUEST["hobby3"];
   }
 }
 if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "[!! please choose your gender!!]";
}


}



?>
