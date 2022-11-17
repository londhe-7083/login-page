<?php
 //the array of numbers withvalues;
 //$num=array(1,2,3,4,5);
 $num=range(1,5); //using range function 
 print_r ($num);
 echo"<br> <br>";

 $num=array(100,200);// using array_pad function
 $num=array_pad($num,5,0);
 print_r ($num);

 //multidimesional array
 $mul=array(array(2,5,6,8),
            array(11,8,9,6),
            array(7,4,9,2));
     // echo var_dump($mul);
     //echo var_dump( $mul[1][2]);
     for($i=0;$i<count($mul); $i++)
          {for($j=0;$j<count($mul[$i]);$j++)
            { 
         echo var_dump($mul[$i][$j]);
    echo"<br>";}}
    

 
?>