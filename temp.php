<?php
//declaring variable temperature as temp measure in degree celsius
$temp=10;
echo "temperature is ".$temp." "."degree celsius"."<br><br>";
if ($temp<=20){
        echo "it really cold today"."<br>";
} elseif ($temp>20 && $temp<30) {
  echo "the weather is just perfect"."<br>";
}elseif ($temp>=30 && $temp<40) {
    echo "It so hot today"."<br>";
} else  {
    echo "Am in sahara desert"."<br>";
}
?>