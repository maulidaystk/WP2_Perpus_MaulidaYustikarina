<!DOCTYPE html>
<html>

<head>
    <title>DATA TRANSAKSI</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="5">
                    <h3>TOKO SEPATU</h3>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><?= $telp ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td><?= $merk; ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp. <?= $harga_sepatu; ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td><?= $ukuran; ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . /toko' ?>">KEMBALI</a></button></p>
    </center>
</body>

</html>
