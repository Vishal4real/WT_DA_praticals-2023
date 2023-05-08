<?php
 $element = new DOMDocument();
 $element -> load("slip_7-1.xml");

 $movietitle = $element->getElementsByTagName("movietitle");
 $actor = $element->getElementsByTagName("actorname");

 foreach($movietitle as $name){
   
    echo "Movie Title = ".$name->textContent;
    echo " ";
    echo "Actor Name = ".$name->textContent."<br>";
 }

?>