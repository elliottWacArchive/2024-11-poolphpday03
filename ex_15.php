<?php
function teacher() {
    echo "I am a Teacher";
}

function student($name) {
    echo "I am a student and my name is " . $name;
}

function fun_teacher() {
    teacher();
}

function fun_student($name) {
    student($name);
}
?>