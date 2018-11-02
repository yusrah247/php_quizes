<?php
$firstname=array("Nafisat", "Yusirat", "Khairat");
$hobbies=array("dancing", "reading", "singing");
$flenght=count($firstname);
//$hlenght=count($hobbies);
//for ($i=0; $i<$flenght; $i++)
foreach ($firstname as $fname) {
    
    foreach ($hobbies as $value) {
//       # code...
 //   } ($x=0; $x <$hobbies; $x++) { 
       echo "my name is ".$fname. ". I like ".$value.". <br/>";
    }

    
}
?>
