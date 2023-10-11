<?php

require_once __DIR__ . "/database.php";
require_once __DIR__ . "/helper.php";

$data = read($database);

$jumlahBarang = $data["count"]; 
$barang = $data["data"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
            session_start();
            if(isset($_SESSION["message"])) {
                echo "<div class='info'>";
                echo "<p>{$_SESSION["message"]}</p>";
                echo "</div>";
            }
            
            session_destroy();
        ?>
    <datalist id="list_nama_barang">
        <?php 
            foreach ($barang as $item) {
                echo "<option>{$item["nama_barang"]}</option>";
            }
        ?>
    </datalist>

    <section>

        <form action="action.php" method="post">
            <table>
            <tbody>
                <tr>
                    <td>
                        <label for="nama_barang">Nama Barang</label>
                    </td>
                    <td>:
                        <input type="text" name="nama_barang" id="nama_barang" list="list_nama_barang">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jumlah_barang">Jumlah Barang </label>
                    </td>
                    <td>:
                        <input type="number" name="jumlah_barang" id="jumlah_barang">
                    </td>    
                </tr>
                <tr>                
                    <td colspan="2" align="right">
                        <input type="submit" name="jenis" value="Edit Barang">
                        <input type="submit" name="jenis" value="Tambah Barang">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </section>
    
    <section>
        <h1>
            <u>Daftar Barang</u>
        </h1>
        <table class="tdata">
            <thead>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Hapus</th>
            </thead>
            <tbody>
                <?php 
            if ($jumlahBarang > 0) {
                foreach($barang as $kolom) {
                    echo "<tr>";
                    echo "<td align='center'>{$kolom['nama_barang']}</td>";
                    echo "<td align='center'>{$kolom['jumlah_barang']}</td>";
                    
                    echo "<td align='center'>";
                    echo '<form action="action.php" method="post">
                    <input type="hidden" name="nama_barang" value="' . $kolom["nama_barang"] . '">
                    <input type="submit" name="jenis" value="X">
                        </form>';
                        echo "</td>";
                        
                        echo "</tr>";
                    }
            } else {
                echo "<tr>";
                echo "<td align='center' colspan='3' style='padding: 10px'>Tidak ada data</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</section>

</body>
</html>