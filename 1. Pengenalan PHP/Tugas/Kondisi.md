# Tugas 1: Admin dan User

1. Buatlah variabel **username** dan **password**
2. Jika **username** adalah **admin** dan **password** adalah **admin123** maka tampilkan "Berhasil akses"
3. Jika password salah maka tampilkan "Password salah"
4. Selain itu tampilkan "Akses ditolak"

<details>
    <summary><u>Lihat Jawaban</u></summary>

```php
<?php

$username = "admin";
$password = 'admin123';

if ($username == 'admin') {
    if ($password == 'admin123') {
        echo "Berhasil Akses";
    } else {
        echo "Password Salah";
    }
} else {
    echo "Akses di tolak";
}


```
</details>