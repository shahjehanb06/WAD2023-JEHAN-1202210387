<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Mobil</title>
    </head>
    <body>
        <?php 
            include("navbar.php");
            include("connect.php");
            $id = $_GET['id'];
            // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc() 
            // serta query SELECT dan WHERE)
            $query = "SELECT * FROM showroom_mobil WHERE id = $id";
            $result = mysqli_query($connect, $query);
            
            if ($result) {
                // Ambil data mobil sebagai array asosiatif
                $mobil = mysqli_fetch_assoc($result);
            } else {
                echo "Error: " . mysqli_error($connect);
            }



            //
        ?>
       <div class="row">
        <center>
            <h1>Edit Mobil</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                                <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="<?php echo $mobil['nama_mobil']; ?>" required>
                                        <label for="nama_mobil">Nama Mobil</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="brand_mobil" id="brand_mobil" value="<?php echo $mobil['brand_mobil']; ?>" required>
                                        <label for="brand_mobil">Brand Mobil</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="warna_mobil" id="warna_mobil" value="<?php echo $mobil['warna_mobil']; ?>" required>
                                        <label for="warna_mobil">Warna Mobil</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" value="<?php echo $mobil['tipe_mobil']; ?>" required>
                                        <label for="tipe_mobil">Tipe Mobil</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="<?php echo $mobil['harga_mobil']; ?>" required>
                                        <label for="harga_mobil">Harga Mobil</label>
                                    </div>
                                    <a name="update" id="update" href="form_update_mobil.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                                    <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                                </form>
                                </div>
                            </div>
                        </div>
                </center>
        </div>
    </body>
</html>