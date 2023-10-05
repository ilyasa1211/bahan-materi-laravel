# Tugas 1: Penjumlahan dan Rata-rata

Buatlah variable bernama nilai, berisi array dengan angka 70, 80, 75, 90, 100 didalamnya

kemudian tentukan jumlah, dan rata-rata nya dengan menggunakan salah satu perulangan (while/for/foreach).

> Hasil yang diharapkan:
>
> jumlah = 415
>
> rata-rata = 83

<details>
    <summary>Jawaban</summary>

```php
<?php

// Penjumlahan

$data = [70, 80, 75, 90, 100];

$i = 0;
$total = 0;
$rata_rata = 0;
// $data[0] = 70;
// $data[1] = 80;
// $data[2] = 75;
// $data[3] = 90;
// $data[4] = 100;

while ($i < count($data) ) {
    $total += $data[$i];
    // $total = $total + $data[$i];    
    // $i += 2;
    // $i = $i + 2;
    $i++;
}

$rata_rata = $total / count($data);

echo "Jumlah: ";
echo $total;
echo PHP_EOL;

echo "Rata-rata: ";
echo $rata_rata;
echo PHP_EOL;
```
</details>

### Tugas 2: Urutkan array

Pelajari tentang cara mengurutkan nilai di dalam array di PHP.

> Hint: 
>
> sort(), ksort(), rsort(), dan sebagainya.

### Tugas 3: Buatlah simple CRUD dengan array

> Untuk DELETE bisa menggunakan unset() atau array_splice()