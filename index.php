<?php

//$step0; //0-9 Normal
$step1 = 10; //alarm //10-19 Yellow
$step2 = 20; //trip //20-29 Red
$step3 = 30; //max //30-~ Orange

$value = 40;

if ($value < $step1) {
    echo "Normal";
} else if ($value < $step2) {
    echo "Alarm";
} else if ($value < $step3) {
    echo "Trip";
} else {
    echo "Max";
}
