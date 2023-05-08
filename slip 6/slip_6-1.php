<?php
    $xml = simplexml_load_file("slip_6-1.xml");
    foreach ($xml->Book as $b){
        echo "Book Name = $b->Bookname "."<br>";
        echo "Book No = $b->Bookno"."<br>";
        echo "Author = $b->Author"."<br>";
        echo "year = $b->year"."<br>";
        
    }

?>