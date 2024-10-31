<?php
    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id DESC");
    ?>
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
        </div>
 
        <legend class="float-none w-auto px-3">Data Kategori</legend>
        <div align="right">
            <a href="?pg=tambah-kategori" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered border border-dark mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($rowKategori = mysqli_fetch_assoc($kategori)) :
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rowKategori['nama_kategori'] ?></td>
                    <td><a href="?pg=tambah-kategori&edit=<?php echo $rowKategori['id']?>" class="btn btn-success btn-sm">Edit
                    </a>
                    <a href="?pg=tambah-kategori&delete=<?php echo $rowKategori['id'] ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a>

                </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </fieldset>
</div>