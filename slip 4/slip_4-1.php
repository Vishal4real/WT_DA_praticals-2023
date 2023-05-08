<?php 
session_start();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $add = $_POST['add'];

    $_SESSION['ID'] = $id;
    $_SESSION['NAME'] = $name;
    $_SESSION['ADD'] = $add;
    echo "<form action='slip_4_1-3.php'  method='post'>
    Enter salary : <input type='text' name='sal'><br>
    <input type='submit'>
</form>";
?>
