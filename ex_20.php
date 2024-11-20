<?php
function spupof($str)
{
    $lowstr = strtolower($str);
    for ($i = 0; $i < strlen($str); $i++) {
        $new_str = "";
        if ($str[$i] == 'z') {
            $new_str = $new_str + 'a';
        }
        echo $str[$i];
        echo "\n";
    }
}

spupof("salut");
?>