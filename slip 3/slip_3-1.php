<?php
    session_start();
    if(isset($_SESSION['Count']))
    {
        $_SESSION['Count']++;
    }
    else
    {
        $_SESSION['Count']=1;
    }
    $Count = $_SESSION['Count'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
   
    if(isset($uname) && isset($pass) && $Count<=3)
    {   
        echo "hello ji $uname";
        if($uname == $pass)
        {
            echo "Login successful";
        }
        else
        {
            echo "<h1>Invalide Details</h1>";
        }
    }

    if($Count>3)
    {
        echo "Three attempts are over!!!";
    }

?>


