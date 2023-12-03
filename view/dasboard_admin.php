
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style2.css">
    <title>Profile dan Navbar</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../img/icons/logo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li><a href="#" id="berandaBtn">beranda</a></li>
            <li><a href="#" id="barangBtn">Barang</a></li>
            <li><a href="#" id="transaksiBtn">transaksi</a></li>
            <li><a href="#" id="settingBtn">Setting</a></li>
            <li><a href="../config/logout.php" >logout</a></li>
        </ul>
    </nav>

    <div id="berandaPage" style="display: none;">
        <!-- Konten untuk halaman Profile -->
       
<body>
    <div class="profile-card-container">
        <div class="profile-card">
            <?php
            include '../config/koneksi.php';
            session_start();
            // Pastikan $id sesuai dengan ID yang Anda inginkan
            $id = 1; // Misalnya, menggantinya dengan ID yang sesuai
            
            // Query untuk mengambil data mitra berdasarkan ID
            $query = "SELECT * FROM config WHERE id = '".$_SESSION['id']."'";
            $result = mysqli_query($koneksi, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $data = mysqli_fetch_assoc($result);
                    // Tampilkan data dalam tabel HTML untuk merapihkan tampilan
                    echo '<tr><td>';
                    echo "<img src='gambar" . $data['gambar'] . "' alt='Gambar Barang' style='max-width: 100px; max-height: 100px;'>";
                    echo '</td><tr><br>';
                    echo '<table>';
                    echo '<tr><td>ID Lapak:</td><td>' . $data['id_admin'] . '</td></tr>';
                    echo '<tr><td>Nama Pemilik:</td><td>' . $data['username'] . '</td></tr>';
                    echo '<tr><td>Nama Lapak:</td><td>' . $data['nama_lapak'] . '</td></tr>';
                    // Tambahkan lebih banyak field sesuai kebutuhan
                    echo '</table>';
                } else {
                    echo "Data tidak ditemukan.";
                }
            } else {
                echo "Error dalam menjalankan query: " . mysqli_error($koneksi);
            }
            // Tutup koneksi jika sudah selesai
            mysqli_close($koneksi);
            ?><br>
        <button class="custom-button"><a href="../config/update_user.php" style="text-decoration: none; color: inherit;">Lengkapi data</a></button>
        </div>
        <div class="additional-card">
            <?php include 'grafik.php'?>
        </div>
    </div>
</body>
    </div>

    <div id="barangPage" style="display: none;">
        <!-- Konten untuk halaman Barang -->
        <?php include 'paket.php'?>
    </div>

    <div id="transaksiPage" style="display: none;">
        <!-- Konten untuk halaman Checkout -->
        <?php include 'transaksi.php'?>
    </div>

    <div id="settingPage" style="display: none;">
        <!-- Konten untuk halaman Setting -->
        <h1>Halaman Setting</h1>
    </div>

    <script>
        // Fungsi untuk menampilkan halaman yang sesuai saat tombol diklik
        function showPage(pageId) {
            // Sembunyikan semua halaman
            document.getElementById('berandaPage').style.display = 'none';
            document.getElementById('barangPage').style.display = 'none';
            document.getElementById('transaksiPage').style.display = 'none';
            document.getElementById('settingPage').style.display = 'none';

            // Tampilkan halaman yang sesuai
            document.getElementById(pageId).style.display = 'block';
        }

        // Event handler untuk tombol Profile
        document.getElementById('berandaBtn').addEventListener('click', function() {
            showPage('berandaPage');
        });

        // Event handler untuk tombol Barang
        document.getElementById('barangBtn').addEventListener('click', function() {
            showPage('barangPage');
        });

        // Event handler untuk tombol Checkout
        document.getElementById('transaksiBtn').addEventListener('click', function() {
            showPage('transaksiPage');
        });

        // Event handler untuk tombol Setting
        document.getElementById('settingBtn').addEventListener('click', function() {
            showPage('settingPage');
        });

        // Tampilkan halaman default (misalnya, Profile) saat halaman dimuat
        showPage('berandaPage');
    </script>
</body>

</html>