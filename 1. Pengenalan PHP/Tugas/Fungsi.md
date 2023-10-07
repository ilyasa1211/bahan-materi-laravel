# Tugas 1: Persegi Panjang

Buatlah 3 fungsi sebagai berikut:
1. fungsi pertama untuk menghitung keliling
2. fungsi kedua untuk menghitung luas
3. fungsi ketiga untuk menampilkan hasilnya

Penerapan:

```php
$panjang = 10;
$lebar = 8;

$keliling = keliling($panjang, $lebar);
$luas = luas($panjang, $lebar);

tampilkan($keliling, $luas);
```

Hasil yang diharapkan:
```console
Keliling: 36
Luas: 80
```

<details>
    <summary>Jawaban</summary>

```php
<?php

$panjang = 10;
$lebar = 8;

$keliling = keliling($panjang, $lebar);
$luas = luas($panjang, $lebar);


function keliling ($panjang, $lebar) {
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}

function luas ($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

function tampilkan ($keliling, $luas) {
    echo "Keliling: $keliling".PHP_EOL;
    echo "Luas: $luas \n";
}

tampilkan($keliling, $luas);
```
</details>




```


# Tugas 2: Pizza

Buatlah 3 fungsi:
1. Fungsi pertama untuk membuat roti (sebagai wadah/tempat)
1. Fungsi kedua untuk menambah topping untuk roti tersebut
1. Fungsi ketiga untuk mencetak topping yang telah ditambahkan

