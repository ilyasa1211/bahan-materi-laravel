# Tugas 1: Penjumlahan dan Rata-rata

Buatlah variable bernama nilai, berisi array dengan angka 70, 80, 75, 90, 100 didalamnya

kemudian tentukan jumlah, dan rata-rata nya dengan menggunakan salah satu perulangan (while/for/foreach).

> Hasil yang diharapkan:
>
> jumlah = 415
>
> rata-rata = 83

<details>
    <summary><u>Lihat Jawaban</u></summary>

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

```php
sort($array); 
// mengurutkan nilai dari terkecil didalam index array dan juga indexnya

rsort(); 
// mengurutkan nilai dari terbesar didalam index array dan juga indexnya

ksort();
// mengurutkan key dari assosiatif array dari terkecil

krsort();
// mengurutkan key dari assosiatif array dari terbesar

asort();
// mengurutkan nilai dari terkecil didalam index array, tetapi tetap mempertahankan nilai dari indexnya

arsort();
// mengurutkan nilai dari terbesar didalam index array, tetapi tetap mempertahankan nilai dari indexnya

```



### Tugas 3: Buatlah simple CRUD dengan array

CRUD adalah singkatan dari Create, Read, Update, Delete

> Untuk DELETE bisa menggunakan unset() atau array_splice()

```php
<?php

$array = [
    [
        "nama" => "ilyas",
        "jurusan" => "backend"
    ],
    [
        "nama" => "reza",
        "jurusan" => "frontend",
    ],
];


// print_r($array);

// Create
// Membuat atau menambah data

$array[] = [
    "nama" => "yusuf",
    "jurusan" => "multimedia"
];

// Read
// Menampilkan data
foreach ($array as $arr) {
    echo $arr["nama"].PHP_EOL;
}

// Update
// Mengubah data
$array[0]["nama"] = "zian";

// Delete
// Menghapus data
unset($array[0]);


```







