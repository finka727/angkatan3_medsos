<?php
    $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
    ?>
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
            <button type="button" class="btn btn-outline-secondary btn-sm">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-sm">Recycle</button>
        </div>
 
        <legend class="float-none w-auto px-3">Data User</legend>
        <div align="right">
            <a href="?pg=tambah-user" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered border border-dark mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Telepon</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($rowUser = mysqli_fetch_assoc($user)) :
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rowUser['telepon'] ?></td>
                    <td><?php echo $rowUser['nama'] ?></td>
                    <td><?php echo $rowUser['email'] ?></td>
                    <td><?php echo $rowUser['jenis_kelamin'] ?></td>
                    <td><a href="?pg=tambah-user&edit=<?php echo $rowUser['id']?>" class="btn btn-success btn-sm">Edit

                    </a>
                    <a href="?pg=tambah-user&delete=<?php echo $rowUser['id'] ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a>

                </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </fieldset>
</div>