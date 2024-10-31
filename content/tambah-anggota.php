<?php
if (isset($_POST['tambah'])) {
    $nama_anggota = $_POST['nama_anggota'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // sql = struktur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO anggota (nama_anggota, telepon, email, alamat) VALUES ('$nama_anggota','$telepon','$email','$alamat')");
    header("location:?pg=anggota&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($editUser);


if (isset($_POST['edit'])) {
    $nama_anggota = $_POST['nama_anggota'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];


    // ubah user kolom apa yang mau diubah (SET), yang mau diubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota='$nama_anggota', telepon='$telepon', email='$email', alamat='$alamat' WHERE id='$id'");
    header("location:?pg=anggota&ubah=berhasil");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id'");
    header("location:?pg=anggota&hapus=berhasil");
}

$queryAnggota = mysqli_query($koneksi, "SELECT * FROM anggota");


?>
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
        </div>

        <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Anggota</legend>
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Nama Anggota </label>
                <input type="text" class="form-control" name="nama_anggota" placeholder="Masukkan Nama Anggota" value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_anggota'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telepon </label>
                <input type="text" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon" value="<?php echo isset($_GET['edit']) ? $rowEdit['telepon'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email </label>
                <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anggota" value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat </label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anggota" value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>">
            </div>
            <div class="mb-3">
                <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'tambah' ?>" class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </fieldset>
</div>