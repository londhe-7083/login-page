 <!-- introduce  variables types global,local,static,function -->
 <?php
 $x=10;// this is global variable

 function var_print()
 {
     $d=45; //this local variables this variable range is only on two cirly brases
     global $x; // global variable accessing to the function
     echo" print variable inside the function: $x,$d.<br> ";

 }

 //var_print();
 echo"print variable outside the function: $x";// direct access global variable
// echo"print variable outside the function: $d";// do not have access local variable
 ?>