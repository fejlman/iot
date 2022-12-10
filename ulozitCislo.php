<?php

 if(isset($_GET["h"])){

    $file = "cislo.txt";
    $lines = count(file("cislo.txt"));
    echo "i = ".$lines."\n";

    $current = file_get_contents($file);

    $current .= $lines.",".$_GET['h']."\n";//pořadí

    if(file_put_contents($file,$current)){
       echo "ulozeno";
    }
    else{
       echo "neulozeno";
    }
 }
 else{
    echo "chybny parametr";
 }
?>