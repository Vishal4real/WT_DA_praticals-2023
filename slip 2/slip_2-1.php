<?php 
    $msg = $_POST['msg'];
    $fonts = $_POST['font_size'];
    $fontc = $_POST['font_color'];
    $background = $_POST['back_color'];

    setcookie('msg',$msg);
    setcookie('font_size',$fonts);
    setcookie('font_color',$fontc);
    setcookie('back_color',$background);

    echo "<h1>Message : $msg</h1>";
    echo "<h1>Font size : $fonts</h1>";
    echo  "<h1>Font colour : $fontc</h1>";
    echo  "<h1>Background colour : $background</h1>";
    echo  "<a href='slip_2-1-3.php'><input type='button' value='set'></a>"
?>