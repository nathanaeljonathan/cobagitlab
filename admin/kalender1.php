<?php
function tglindo1($date){
    $blnindo = array("JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER");

    $thn = substr($date, 0, 4);
    $bln = substr($date, 5, 6);
    $tgl   = substr($date, 8, 9);

    $result = ($tgl) . " " . ($blnindo[(int)$bln-1]) . " ".($thn);        
    return($result);
}
?>