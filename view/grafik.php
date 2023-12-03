<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="../chart.js"></script>
</head>

<body>
    <style type="text/css">
        body {
            font-family: roboto;
        }

        table {
            margin: 0px auto;
        }
    </style>

    <?php
    include '../config/koneksi.php';
    ?>

    <div style="width: 800px;margin: 0px auto;">
        <canvas id="myChart"></canvas>
    </div>

    <br />
    <br />

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id transaksi</th>
                <th>Id lapak</th>
                <th>tanggal transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM paket_travel");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $d['id_paket']; ?>
                    </td>
                    <td>
                        <?php echo $d['nama_paket']; ?>
                    </td>
                    <td>
                        <?php echo $d['nama_pemesan']; ?>
                    </td>
                    <td>
                        <?php echo $d['harga_paket']; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["2024", "2023", "2022", "2021"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $jumlah_teknik = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE SUBSTRING(tanggal_transaksi, 1, 4) = '2024'");
                    echo mysqli_num_rows($jumlah_teknik);
                    ?>,
                    <?php
                    $jumlah_ekonomi = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE SUBSTRING(tanggal_transaksi, 1, 4) = '2023'");
                    echo mysqli_num_rows($jumlah_ekonomi);
                    ?>,
                    <?php
                    $jumlah_fisip = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE SUBSTRING(tanggal_transaksi, 1, 4) = '2022'");
                    echo mysqli_num_rows($jumlah_fisip);
                    ?>,
                    <?php
                    $jumlah_pertanian = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE SUBSTRING(tanggal_transaksi, 1, 4) = '2021'");
                    echo mysqli_num_rows($jumlah_pertanian);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>

</html>