<?php
/*$shubh=array("ram","shyam","sonu","ravi");
echo $shubh[0]."<br>";
echo $shubh[1];
echo $shubh[2];
echo $shubh[3];

$shubh=array("shubh"=>"ram","sd"=>"shyam", "rd"=>"sonu","md"=>"ravi");
foreach($shubh as $key=>$value){
     echo("fav $key is $value".'<br>');}

//accessing members multidimension array
print("multidimesion array is:- <br>");
$num[]=array('1','2','44','5','23','67');
$num[]=array('54','6','25','35','65','45');
$md=count($num);
$sd=count($num[0]);
for($i=0;$i<$md; $i++)
{
     for($j=0;$j<$sd;$j++){
          echo("element:\[$i $j\]=".$num[$i][$j]."<br>");

     }
     // echo "<br>";*/
     // $student=array(32,45,43); 
     // //$student=array("dog","cat","horse");
     // list ($R, $N, $C)=$student;
     // echo $R."<br/>"; 
     // //print("ele: ".$R);
     // $x=true;
     // echo var_dump($x);
     $city=array('delhi','mumbai','pune','ambi');
     $city[]='surat';
     echo "$city[3] <br>";
     $size=count($city);
     for($i=0; $i<  $size; $i++){
          echo" $city[$i]<br>";
     }

?>
