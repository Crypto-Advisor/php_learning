<?php

    $cambodia = 2103942;
    $myanmar = 19092;
    $norway = 109;
    $albania = 9094;

    $cambodia_ex = 0.00025;
    $myanmar_ex = 0.00054;
    $norway_ex = 0.10;
    $albania_ex = 0.0088;

    $cambodia_usd = $cambodia * $cambodia_ex - 1;
    $myanmar_usd = $myanmar * $myanmar_ex - 1;
    $norway_usd = $norway * $norway_ex - 1;
    $albania_usd = $albania * $albania_ex - 1;

    echo $cambodia;
    echo "\n$myanmar";
    echo "\n$norway";
    echo "\n$albania";

    echo "\nUSD from cambodia $cambodia_usd with $1 fee deducted";
    echo "\nUSD from myanmar $myanmar_usd with $1 fee deducted";
    echo "\nUSD from norway $norway_usd with $1 fee deducted";
    echo "\nUSD from albania $albania_usd with $1 fee deducted";
