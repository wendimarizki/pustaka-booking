<html>

<head>
    <title>Tampil Data Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3"> Tampil Data Sepatu </th>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
            <tr>
                <td>Nama pembeli</td> <td>:</td>
                <td> <?= $pembeli; ?> </td>
            </tr>
            <tr>
                <td>No Handphone</td> <td>:</td>
                <td> <?= $nohp; ?> </td>
            </tr>
            <tr>
                <td>Merk</td> <td>:</td>
                <td> <?= $merk; ?> </td>
            </tr>
            <tr>
                <td>ukuran</td> <td>:</td>
                <td> <?= $ukuran; ?> </td>
            </tr>
            <tr>
                <td>Harga</td> <td>:</td>
                <td> <?= $harga_sepatu; ?> </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>