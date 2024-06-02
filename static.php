<?php

class ContohStatic {
    public static $angka = 1;
    public static function halo(){
        return "Halo " . self::$angka++. "kali.";
    }
}

$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();


echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
?>

