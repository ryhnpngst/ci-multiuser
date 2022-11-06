<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($product as $u) { ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="produk" value="<?php echo $u->produk ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="hargaBeli" value="<?php echo $u->hargaBeli ?>"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="text" name="hargaJual" value="<?php echo $u->hargaJual ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $u->jumlah
                                                                ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>