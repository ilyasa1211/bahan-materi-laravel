# Tugas 1: Bilangan Pangkat

Buatlah deretan bilangan pangkat 2 dari bilangan 1-10 menggunakan perulangan

> Hasil yang diharapkan
>
> 1, 4, 9, 16, 25, 36, 49, 64, 81, 100,

<details>
    <summary><u>Lihat Jawaban</u></summary>

```php
for ($i=1; $i <= 10; $i++) { 
    echo $i * $i . ", ";
}
```

</details>

# Tugas 2: Deretan bilangan ganjil

Buatlah sebuah perulangan untuk menampilkan deretan dari bilangan ganjil dari 1-40, dipisah menggunakan koma, tetapi untuk yang terakhir tidak.

<details>
    <summary><u>Lihat Jawaban</u></summary>
    
```php
<?php

for ($i = $start; $i <= $end; $i++) {
    $bilanganGanjil = $i %2 !== 0;

    if ($bilanganGanjil) {
        echo $i;

        if ($i !== $end) {
            echo ", ";
        }
    }
}

```

</details>
