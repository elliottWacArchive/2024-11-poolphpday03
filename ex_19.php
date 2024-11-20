<?php
function calc(string $operation, int $nb1, int $nb2) {
    if ($operation == "+") {
        return ($nb1 + $nb2);
    }
    elseif ($operation == "-") {
        return ($nb1 - $nb2);
    }
    elseif ($operation == "%") {
        return ($nb1 % $nb2);
    }
    elseif ($operation == "*") {
        return ($nb1 * $nb2);
    }
    elseif ($operation == "/") {
        return ($nb1 / $nb2);
    }
}
?>