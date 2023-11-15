
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

if (isset($_POST['update'])) {
    // (2) Tangkap nilai "id" mobil dari formulir
    $id = $_GET['id'];

    // (3) Tangkap nilai data mobil dari formulir
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];

    // (4) Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
    $update = "UPDATE showroom_mobil SET 
                nama_mobil='$nama_mobil', 
                brand_mobil='$brand_mobil', 
                warna_mobil='$warna_mobil', 
                tipe_mobil='$tipe_mobil', 
                harga_mobil='$harga_mobil' 
                WHERE id=$id";

    // (5) Eksekusi perintah SQL
    $result = mysqli_query($connect, $update);

    // (6) Buatkan kondisi jika eksekusi query berhasil
    if ($result) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>document.location.href = 'list_mobil.php'</script>";
        exit(); 
    } else {
        echo "Error: " . mysqli_error($connect);
    }
} else {
    echo "Permintaan tidak valid.";
}

// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);
?>
