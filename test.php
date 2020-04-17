<?php
$new='';
$name='hello world';
for($i=0;$i<len($name);$i++){
     if($name[i]==' '){
         break;
     }
     $new=$new.$name[i];
 }
 echo$new;
?>