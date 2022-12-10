<?php

 if(isset($_GET["h"])){

    $file = "cislo.txt";
    $lines = count(file("cislo.txt"));//získání počtu řádek
    echo "i = ".$lines."\n";

    $current = file_get_contents($file);//uloží se momentální obsah cislo.txt

    $current .= $lines.",".$_GET['h']."\n";//přidá se do něj pořadí nového hodnoty, a hodnota

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