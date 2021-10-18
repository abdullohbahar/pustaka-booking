<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Dat Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak') ?>" method="POST">
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Matakuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $kode ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <?= $nama ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <td>
                        <?= $sks ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah') ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>