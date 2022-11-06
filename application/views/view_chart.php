<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Chart Toko 1</title>
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
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    if (count($graph) > 0) {
                        foreach ($graph as $data) {
                            echo "'" . $data->produk . "',";
                        }
                    }
                    ?>
                ],
                datasets: [{
                    label: ' Penjualan Barang Toko 1',
                    backgroundColor: '#ADD8E6',
                    borderColor: '##93C3D2',
                    data: [
                        <?php
                        if (count($graph) > 0) {
                            foreach ($graph as $data) {
                                echo $data->jumlah . ", ";
                            }
                        }
                        ?>
                    ]
                }]
            },
        });
    </script>
</body>

</html>