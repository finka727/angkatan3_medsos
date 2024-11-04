<?php
if (isset($_POST['posting'])) {
    $content = $_POST['content'];

    // jika gambar mau diubah
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        // png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        // JIKA EXTENSI FOTO TIDAK ADA EXT YANG TERDAFTAR DI ARRAY EXT
        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {
            // pindahkan gambar dari tmp folder ke folder yang sudah kita buat
            // unlink() : mendelete file
            unlink('upload/' . $rowTweet['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
            $insert = mysqli_query($koneksi, "INSERT INTO tweet (content, id_user, foto) VALUES ('$content','$id_user','$nama_foto')");
        }
    } else {
        //gambar tidak mau diubah
        $insert = mysqli_query($koneksi, "INSERT INTO tweet (content, id_user) VALUES ('$content','$id_user')");
    }
    header("location:?pg=profil&tweet=berhasil");
}

$queryPosting = mysqli_query($koneksi, "SELECT * FROM tweet WHERE id_user ='$id_user'");


?>

<div class="row">
    <div class="col-sm-12" align="right">
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tweet</button>
    </div>
    <div class="col-sm-12 mt-3">
        <?php while ($rowPosting = mysqli_fetch_assoc($queryPosting)): ?>
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <img src="upload/<?php echo !empty($rowUser['foto']) ? $rowUser['foto'] : 'https://placehold.co/800x200' ?>" alt="..." width="100" class="rounded-circle border border-2">
                </div>
                <div class="flex-grow-1 ms-3">
                    <?php if (!empty($rowPosting['foto'])): ?>
                        <img src="upload/<?php echo $rowPosting['foto'] ?>" alt="" width="100">
                    <?php endif ?>
                    <?php echo $rowPosting['content'] ?>
                </div>
            </div>
        <?php endwhile ?>
        <hr>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tweet</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <textarea id="summernote" name="content" id="" class="form-control" placeholder="Apa yang sedang hangat dibicarakan?"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="posting">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>