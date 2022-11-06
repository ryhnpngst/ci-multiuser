<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Sistem Informasi dengan CodeIgniter</title>
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
    <center>
        <h1>Sistem Informasi dengan CodeIgniter</h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Jumlah Penjualan</th>
            <th>Total Pendapatan</th>
            <?php if ($this->session->userdata('access') == 'Administrator') { ?>
                <th>Action</th>
            <?php }; ?>
        </tr>
        <?php
        $no = 1;
        foreach ($product as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->produk ?></td>
                <td><?php echo $u->hargaBeli ?></td>
                <td><?php echo $u->hargaJual ?></td>
                <td><?php echo $u->jumlah ?></td>
                <td><?php echo $u->jumlah * $u->hargaJual ?></td>
                <?php if ($this->session->userdata('access') == 'Administrator') { ?>
                    <td>
                        <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?>
                        <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
                    </td>
                <?php }; ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>