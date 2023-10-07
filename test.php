<?php

hitung(4, 3, "bagi");

function tambah(int $number, int $number2): int {
    return $number + $number2;
}

function kurang(int $number, int $number2): int {
    return $number - $number2;
}

function kali(int $number, int $number2): int {
    return $number * $number2;
}

function bagi(int $number, int $number2): int | float {
    return $number / $number2;
}

function hitung(int $number, int $number2, string $method): void {
    echo call_user_func_array($method, [$number, $number2]);
}
