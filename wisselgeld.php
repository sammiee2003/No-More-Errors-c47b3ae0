<?php
$bedrag = ($argv[1]);
$geldEnheden = array(50,20,10,5,2,1);
$centen = array(50, 20, 10, 5, 2, 1);
$geld = intval($bedrag);
$cent = $bedrag - $geld;
$cent = intval(round($cent * 100));
$cent = round($cent / 5) * 5;


euro($geldEnheden, $geld);
function euro($geldEnheden, $geld) {
    foreach ($geldEnheden as $value){
            
        $restgeld = floor($geld / $value);
        if (is_numeric($restgeld >= 1)) {
            $geld = $geld - ($value * $restgeld);
            echo $restgeld . "x" . $value . "euro" . PHP_EOL;
        }elseif($restgeld < 0) {
            echo "een min getal kan niet";
        }else{
            echo "geen geldig bedrag meegegeven\n";
        }
        if(empty($restgeld)){
            echo "Je hebt geen bedrag meegegeven dat omgewisseld dient te worden\n";
        }
    }
}
centen($centen, $cent);
function centen($centen, $cent) {
    foreach ($centen as $value) {
        $restcent = floor($cent / $value);
        if ($restcent >= 1) {
            $cent = $cent - ($value * $restcent);
            echo $restcent . " x" . $value . "cent" . PHP_EOL;
        }
    }
}
?>