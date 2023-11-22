<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST['email'];
    // b. Ambil nilai input name
    $name = $_POST['name'];
    // c. Ambil nilai input username
    $username = $_POST['username'];
    // d. Ambil nilai input password
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query_user = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query_user);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysqli_num_rows($result) == 0){
    // a. Buatlah query untuk melakukan insert data ke dalam database
    $query_insert = "INSERT INTO users VALUES ('', '$name', '$username', '$email', '$password')";
    $insert = mysqli_query($conn, $query_insert);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    if($insert){
        $_SESSION['message'] = 'Pendaftaran Sukses, Silakan Login';
        header('Location: ../views/login.php');
    }else{
        $_SESSION['message'] = 'Daftar Akun Gagal';
    }
}

// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
else{
    $_SESSION['message'] = 'Email sudah terdaftar';
    header('Location: ../views/register.php');
}
//

?>