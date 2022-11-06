<!DOCTYPE html>
<html>

<head>
    <title>Search Data</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-bar w3-border w3-light-grey w3-card-4">
        <a href="<?php echo base_url('home/index'); ?>" class="w3-bar-item w3-blue w3-button">Home</a>
        <?php if ($this->session->userdata('access') == 'Administrator') { ?>
            <a href="<?php echo base_url('crud/index'); ?>" class="w3-bar-item w3-button">Daftar Barang</a>
        <?php }
        if ($this->session->userdata('access') == 'Pengguna') { ?>
            <a href="<?php echo base_url('crud/index'); ?>" class="w3-bar-item w3-button">Daftar Barang</a>
        <?php }
        if ($this->session->userdata('access') == 'Manager') { ?>
            <a href="<?php echo base_url('chart/index'); ?>" class="w3-bar-item w3-button">Chart Toko 1</a>
            <a href="<?php echo base_url('chartDua/index'); ?>" class="w3-bar-item w3-button">Chart Toko 2</a>
        <?php }; ?>
        <a href="<?php echo base_url('crud/search'); ?>" class="w3-bar-item w3-button">Cari Data</a>
        <a href="<?php echo site_url('login/logout'); ?>" class="w3-bar-item w3-button w3-red w3-right">Keluar</a>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-xs-4 col-xs-offset-4">
                <form action="<?= base_url('crud/search') ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Masukan Nama Produk">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-center">
                <h3>Data Barang</h3>
                <?php if (!empty($keyword)) { ?>
                    <p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
                <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Jumlah Penjualan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?= $row['produk'] ?></td>
                                <td><?= $row['hargaBeli'] ?></td>
                                <td><?= $row['hargaJual'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>