<?php
function spupof($str)
{
    $lowstr = strtolower($str);
    for ($i = 0; $i < strlen($str); $i++) {
        echo $str[$i];
        echo "\n";
    }
}

spupof("salut");
?>