<?php
     $xml = <<<xml
     <?xml version="1.0" encoding="UTF-8"?>
      <students>
            <student>
                <student_roll>1</student_roll>
                <student_name>Vishal</student_name>
                <Course>java</Course>
            </student>
            <student>
                <student_roll>2</student_roll>
                <student_name>shivam</student_name>
                <Course>java</Course>
            </student>
            <student>
                <student_roll>3</student_roll>
                <student_name>tejas</student_name>
                <Course>python</Course>
            </student>
            <student>
                <student_roll>4</student_roll>
                <student_name>santa</student_name>
                <Course>python</Course>
            </student>
      </students>
     xml;
     $fname ="student.xml";
     $fp = fopen($fname,"w");
     fwrite($fp,$xml);
     fclose($fp);
     echo "CREATED FILE - ".$fname."<br><br>";
     $input = readline("Enter Course name to search: ");

    
?>