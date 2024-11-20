<?php
function get_args() {
    return func_get_args();
}

function get_last_arg() {
    $array = func_get_args();
    echo end($array);
}
?>