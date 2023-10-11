<?php

require_once __DIR__ . "/helper.php";
require_once __DIR__ . "/database.php";


$jenisRequest = $_POST["jenis"];

if (!isset($jenisRequest)) {
    redirect(HOME_URL);    
}

handleRequest($jenisRequest, $database);
redirect(HOME_URL);    

function handleRequest(string $jenis, $database) {
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

    if ($jenis == CREATE_DATA) {
        create($database, $nama_barang, $jumlah_barang);
        infoMessage("Data berhasil ditambahkan");
        return;
    } 
    
    if ($jenis == DELETE_DATA) {
        delete($database, $nama_barang);
        infoMessage("Data berhasil dihapus");
        return;
    }
    
    if ($jenis == UPDATE_DATA) {
        $result = update($database, $nama_barang, $jumlah_barang);
        if ($result["count"]) {
            infoMessage("Data berhasil di edit");
        } else {
            infoMessage("Tidak ada data yang di edit");
        }

        return;
    }
}

