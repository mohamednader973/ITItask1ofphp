<?php

echo phpinfo()."<br>";
ini_get('display_errors')."<br>";

if(ini_get('display_errors') !=1){
  echo("Fatal Error")."<br>";
}
define("NAME_OF_WEBSITE",'task');
$NOWS=NAME_OF_WEBSITE;
echo $NOWS;
echo "<br>";

echo __file__;
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['SERVER_ADDR'];
echo "<br>";

echo $_SERVER['REMOTE_PORT'];
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";


$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo "<br>";
echo ("At the end of the loop a = $a and b = $b" );
echo "************variable i =$i";


#5
//while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}

echo ("Loop stopped at i = $i and num = $num" );
// num=40
// i=10

#6
//do...while
$i = 10;
$num = 0;

         do {
            $i++;
         }

         while( $i < 10 );
         echo "<BR>";
         echo ("Loop stopped at i = $i<br>" );
// i=11
// num=

#7
//foreach
$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) {
   echo "Value is $value <br />";
}
echo "value of variable value=".$value;

$age=10;
switch($age){
   case ($age<5):
      echo "Stay at home<br>";
   break;
   case ($age==5):
      echo "God to Kindergarden";
   break;
   case ($age!=6 && $age==12):
       echo ("Go to grade :$grade<br>");
   break;
   default:
      echo "Thanks!";
   break;
}

 ?>
