<?php
$level = mysqli_query($koneksi, "SELECT * FROM level ORDER BY id DESC");
?>
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
        </div>

        <legend class="float-none w-auto px-3">Data Level</legend>
        <div align="right">
            <a href="?pg=tambah-level" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered border border-dark mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($rowLevel = mysqli_fetch_assoc($level)) :
                ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rowLevel['nama_level'] ?></td>
                        <td><a href="?pg=tambah-level&edit=<?php echo $rowLevel['id'] ?>" class="btn btn-success btn-sm">Edit
                            </a>
                            <a href="?pg=tambah-level&delete=<?php echo $rowLevel['id'] ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a>

                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </fieldset>
</div>