<?php
$A = 123 ;// variable global
function Test() {
global $A ;// variable local
echo"Nilai A dalam fungsi = $A \n";
}
Test();
echo"Nilai A Luar fungsi = $A \n";
?>