
<?php
$connect = mysqli_connect("localhost:3306", "root", "", "modul3_wad");
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($connect -> connect_error){
    echo "Tidak dapat terhubung ke database";
}
// 
?>