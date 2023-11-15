<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET['id'])) {
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $id = $_GET['id'];
    $delete = "DELETE FROM showroom_mobil WHERE id = $id";
    $result = mysqli_query($connect, $delete);

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($result) {
        echo "<script>alert('Data telah dihapus')</script>";
        echo "<script>console.log('yaaaa') </script>";
        header("Location: list_mobil.php");
    } else {
        echo "<script>alert('Gagal menghapus data')</>";
        header("Location: list_mobil.php");
    }
    // Tutup koneksi ke database setelah selesai menggunakan database
    // exit();
}
?>