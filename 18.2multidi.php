<?php
$num[]=array('1','3','44','53','21','66','77');
$num[]=array('23','44','22','89' ,'32','31','78');
$var1=count($num);
$var2=count($num[0]);
for($i=0; $i<$var1; $i++)
{
    for($j=0; $j<$var2; $j++)
    {print("element: [$i $j] = ".$num[$i][$j]."<br>");}
    print("\n");
}
?>