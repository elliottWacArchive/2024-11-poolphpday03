<?php
function my_sub() {
    global $nb_a, $nb_b;
    $nb_c = $nb_a - $nb_b;
    $nb_a = $nb_c;
    return $nb_c;
}
?>