<?php
 $tech =$POST['tech'];

if(is_array($tech)){
  {foreach($tech as $v) 
    echo $v."<br/>";}
}
else 
{echo $tech."<br/>";}
?>