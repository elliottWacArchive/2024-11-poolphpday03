<?php
function spupof($str)
{
    $lowstr = strtolower($str);
    $new_str = "";
    for ($i = 0; $i < strlen($lowstr); $i++) {
        if ($lowstr[$i] == 'z') {
            $new_str = $new_str . 'a';
        }
        elseif (($lowstr[$i] >= 'a') && ($lowstr[$i] <= 'y')) {
            $char = ord($lowstr[$i]) + 1;
            $new_str = $new_str . chr($char);
        }
        else {
            $new_str = $new_str . $lowstr[$i];
        }
    }
    echo $new_str . "\n";
};
?>