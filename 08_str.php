<?php
$name="harry is a good boy";
$var="shubh";
echo$name;
echo"<br>";

echo"the length of the"." my string is ".Strlen($name);
echo"<br>";

echo"string count is:-" . str_word_count($name);
echo"<br>";

echo"string reverse is:- ". strrev($name);
echo"<br>";

echo"string position is:-". strpos($name, "is");
echo"<br>";

echo"string replace is:-".str_replace("harry"," rohan",$name);
echo"<br>";

echo"string repeat is:-".str_repeat($name, 4);
echo"<br>";

echo"the string comparison:-".strcmp($name,$var); //TO SEE UNEQUEL VAR
echo"<br>";

echo"the case cmp is" .strcasecmp("hellorr","HELLO");// TO SEE UNEQUAL VAR
echo"<br>";

echo"the string your choice comparison :-".strncmp("the shubh ty","the harry ty",4);
echo"<br>";//DONT SHOW UNEQUAL VAR

echo"the string is :-". strncasecmp("the shubh is ", "THE SHUBH IS ",15);//DONT SHOW UNEQUAL VAR
echo"<br>";

$var1="sea";
$var2="see";

if(soundex($var1)==soundex($var2)){
echo"soundex: $var1 sounds $var2 <br>";}

else 
{echo" sondex not sounds same";}

?>