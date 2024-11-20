<?php
function teacher() {
    echo "I am a Teacher";
}

function student($name) {
    echo "I am a student and my name is " . $name;
}

function func_teacher() {
    teacher();
}

function func_student($name) {
    student($name);
}
?>