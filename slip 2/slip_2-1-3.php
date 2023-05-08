<?php 
    $msg = $_COOKIE['msg'];
    $fs = $_COOKIE['font_size'];
    $fc = $_COOKIE['font_color'];
    $bc = $_COOKIE['back_color'];
    ?>
    <body bgcolor="<?php echo $bc?>">
     <h1 style="<?php echo "font-size:$fs"."px"?>; <?php echo "color:$fc;"?>"><?php echo $msg?></h1>
    </body>
