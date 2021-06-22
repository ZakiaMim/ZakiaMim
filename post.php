<html>
<body>
    <?php
     $user=$_POST ["fname"];
    $result="";

    if($user=="")
    {
        $result="Please enter your valid name ";
    }
    else
    {
        $result= $user;
    }

    ?>

    Welcome!!<?php
    echo $result;
    ?><br>
    Your email address is : 
    <?php
    echo $_POST["email"];
    echo "<br>";
    ?>


</body>



</html>