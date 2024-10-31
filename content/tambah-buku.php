<?php
if (isset($_POST['tambah'])) {
    $nama_buku = $_POST['nama_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $pengarang = $_POST['pengarang'];
    $id_kategori = $_POST['id_kategori'];

    // sql = struktur query languages / DML = data manipulation language
    // select, insert, update, delete
    $insert = mysqli_query($koneksi, "INSERT INTO buku (id_kategori, nama_buku, penerbit, tahun_terbit, pengarang) VALUES ('$id_kategori','$nama_buku','$penerbit','$tahun_terbit','$pengarang')");
    header("location:?pg=buku&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query($koneksi, "SELECT * FROM buku WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($editUser);


if (isset($_POST['edit'])) {
    $nama_buku = $_POST['nama_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $pengarang = $_POST['pengarang'];
    $id_kategori = $_POST['id_kategori'];

    // ubah user kolom apa yang mau diubah (SET), yang mau diubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE buku SET nama_buku='$nama_buku', penerbit='$penerbit', tahun_terbit='$tahun_terbit', pengarang='$pengarang', id_kategori='$id_kategori' WHERE id='$id'");
    header("location:?pg=buku&ubah=berhasil");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM buku WHERE id='$id'");
    header("location:?pg=buku&hapus=berhasil");
}

$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");


?>
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
        </div>

        <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Buku</legend>
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Nama Kategori </label>
                <select name="id_kategori" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <!-- option yang datanya di ambil dari tabel kategori -->
                    <?php while ($rowKategori = mysqli_fetch_assoc($queryKategori)): ?>
                        <option <?php echo isset($_GET['edit'])?($rowKategori['id'] == $rowEdit['id_kategori'] ? 'selected' : '') : '' ?> value="<?php echo $rowKategori['id'] ?>">
                        <?php echo $rowKategori['nama_kategori']?></option>
                     <?php endwhile ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Buku </label>
                <input type="text" class="form-control" name="nama_buku" placeholder="Masukkan Nama Buku" value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_buku'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penerbit </label>
                <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit" value="<?php echo isset($_GET['edit']) ? $rowEdit['penerbit'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tahun Terbit </label>
                <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="<?php echo isset($_GET['edit']) ? $rowEdit['tahun_terbit'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pengarang </label>
                <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Nama Pengarang" value="<?php echo isset($_GET['edit']) ? $rowEdit['pengarang'] : '' ?>">
            </div>
            <div class="mb-3">
                <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'tambah' ?>" class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </fieldset>
</div>