<?php
    session_start();
    $salary = $_POST['sal'];

    echo "Employe name ".$_SESSION['NAME']."<br>";
    echo "Employe id ". $_SESSION['ID'];
    echo "Employee address ".$_SESSION['ADD'];
    echo "Employe salary ".$salary;
?>