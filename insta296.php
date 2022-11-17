<?php
$daily= [1,2,3,4,5];
$coding= array_values($daily);
$coding=array_sum($coding);
echo"sum is $coding<br>";
$habit=$coding/count($daily);
$habit=$habit%5;
echo"ans is $habit";?>