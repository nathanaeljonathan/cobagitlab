<?php
function regis($date){
    $blnindo = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

    $thn = substr($date, 2, 4);
    $bln = substr($date, 5, 6);
    $tgl   = substr($date, 8, 9);

    $result = ($tgl) . "" . ($blnindo[(int)$bln-1]) . "".($thn-1+1);        
    return($result);
}
?>