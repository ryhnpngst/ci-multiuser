<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <div class="w3-container">
        <h1>Hai <?php echo $this->session->userdata('name'); ?></h1>
        <h3>Ini adalah halaman untuk <?php echo $this->session->userdata('access'); ?></h3>
    </div>
</body>

</html>