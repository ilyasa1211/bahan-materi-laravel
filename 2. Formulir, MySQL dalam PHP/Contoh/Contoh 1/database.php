<?php

require_once __DIR__ . "/environment.php";

$connectionString = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";"; 

try {
    $database = new PDO($connectionString, DB_USERNAME, DB_PASSWORD);
} catch (\Throwable $th) {
    echo "<h4>Koneksi ke database gagal!</h4>";
    echo "<pre>Alasan: {$th->getMessage()} </pre>";
    die();
}

function create(PDO $database, string $nama_barang, int $jumlah_barang): void {
    $database->query("INSERT INTO barang VALUES ('$nama_barang', $jumlah_barang);");
}

function read(PDO $database): array {
    $result = $database->query("SELECT * FROM barang;");
    return [
        "count" => $result->rowCount(),
        "data" => $result->fetchAll()
    ];
}

function update(PDO $database, string $nama_barang, int $jumlah_barang): array {
    $result = $database->query("UPDATE barang SET jumlah_barang = $jumlah_barang WHERE nama_barang = '$nama_barang';");
    return [
        "count" => $result->rowCount() 
    ];
}

function delete(PDO $database, string $nama_barang): void {
    $database->query("DELETE FROM barang WHERE nama_barang = '$nama_barang';");
}