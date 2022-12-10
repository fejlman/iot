<?php

 $ret = file_get_contents("cislo.txt");

 echo $ret;
/*
 $ret = file("cislo.txt");

 print_r($ret);
/*
 foreach ($file as $ret) {
    echo $ret;
 }

/*
 $fn = fopen("cislo.txt","r");
  
 while(! feof($fn))  {
   $ret = fgets($fn);
   echo $ret;
 }

 fclose($fn)
*/
?>