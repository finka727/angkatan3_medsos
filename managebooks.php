<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #FFDAB9;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navAltMarkup">
                <div class="navbar-nav">
                    <a href="dashboard.php" class="nav-link">Dashboard</a>
                    <a href="manageaccounts.php" class="nav-link">Manage Accounts</a>
                    <a href="managebooks.php" class="nav-link">Manage Books</a>
                </div>
            </div>
        </div>
    </nav> 
<div class="container mt-4 mb-3">
    <fieldset class="border rounded-1 p-5 border-secondary border border border-4 border border-dark">
        <div class="d-flex justify-content-start mb-3">
            <button type="button" class="btn btn-outline-secondary btn-sm">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-sm">Recycle</button>
        </div>
        
        <legend class="float-none w-auto px-3">Table Anggota</legend>
        <div class="table-responsive">
                <table class="table table-bordered border border-dark">
                <thead>
                    <tr>
                        <th style="background-color: #A9A9A9">No <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Kategori Buku <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Lokasi Rak <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Judul <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Pengarang <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Penerbit <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Tahun terbit <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Keterangan <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Stock <i class="fa-solid fa-sort"></i></th>
                        <th style="background-color: #A9A9A9">Settings <i class="fa-solid fa-sort"></i></th>
                    </tr>
                <tbody>
                    <tr>
                        <td style="background-color: #AFEEEE;">1.</td>
                        <td style="background-color: #AFEEEE;">Anak-anak dan Remaja</td>
                        <td style="background-color: #AFEEEE;">AR-BAA-AR1</td>
                        <td style="background-color: #AFEEEE;">Cerita si Ipin</td>
                        <td style="background-color: #AFEEEE;">Harasan</td>
                        <td style="background-color: #AFEEEE;">Harasan Media</td>
                        <td style="background-color: #AFEEEE;">2008</td>
                        <td style="background-color: #AFEEEE;">Buku ini untuk anak-anak</td>
                        <td style="background-color: #AFEEEE;">16</td>
                        <td style="background-color: #AFEEEE;"><i class="fi fi-rs-trash-clock"></i> <i class="fi fi-rs-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Anak-anak dan Remaja</td>
                        <td>AR-BAA-AR1</td>
                        <td>Cerita si Ipin</td>
                        <td>Harasan</td>
                        <td>Harasan Media</td>
                        <td>2008</td>
                        <td>Buku ini untuk anak-anak</td>
                        <td>16</td>
                        <td><i class="fi fi-rs-trash-clock"></i> <i class="fi fi-rs-pencil"></i></td>
                    </tr>
                    <tr>
                        <td style="background-color: #AFEEEE;">3.</td>
                        <td style="background-color: #AFEEEE;">Anak-anak dan Remaja</td>
                        <td style="background-color: #AFEEEE;">AR-BAA-AR1</td>
                        <td style="background-color: #AFEEEE;">Cerita si Ipin</td>
                        <td style="background-color: #AFEEEE;">Harasan</td>
                        <td style="background-color: #AFEEEE;">Harasan Media</td>
                        <td style="background-color: #AFEEEE;">2008</td>
                        <td style="background-color: #AFEEEE;">Buku ini untuk anak-anak</td>
                        <td style="background-color: #AFEEEE;">16</td>
                        <td style="background-color: #AFEEEE;"><i class="fi fi-rs-trash-clock"></i> <i class="fi fi-rs-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Anak-anak dan Remaja</td>
                        <td>AR-BAA-AR1</td>
                        <td>Cerita si Ipin</td>
                        <td>Harasan</td>
                        <td>Harasan Media</td>
                        <td>2008</td>
                        <td>Buku ini untuk anak-anak</td>
                        <td>16</td>
                        <td><i class="fi fi-rs-trash-clock"></i> <i class="fi fi-rs-pencil"></i></td>
                    </tr>
                    <tr>
                        <td style="background-color: #AFEEEE;">5.</td>
                        <td style="background-color: #AFEEEE;">Anak-anak dan Remaja</td>
                        <td style="background-color: #AFEEEE;">AR-BAA-AR1</td>
                        <td style="background-color: #AFEEEE;">Cerita si Ipin</td>
                        <td style="background-color: #AFEEEE;">Harasan</td>
                        <td style="background-color: #AFEEEE;">Harasan Media</td>
                        <td style="background-color: #AFEEEE;">2008</td>
                        <td style="background-color: #AFEEEE;">Buku ini untuk anak-anak</td>
                        <td style="background-color: #AFEEEE;">16</td>
                        <td style="background-color: #AFEEEE;"><i class="fi fi-rs-trash-clock"></i> <i class="fi fi-rs-pencil"></i></td>
                    </tr>
                </tbody>
            
        </div>
        </table>
    </div>
    <footer class="fixed-bottom" style="background-color: #FFDAB9; min-height: 65px">
            <div class="row;">
                    <p class="text-center pt-3 px-4;">Copyright &copy 2024 PPKD - Jakarta Pusat</p>
                </div>
            </footer>
</div>

<script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>