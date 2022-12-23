<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Data Mahasiswa</span>
        </div>
    </nav>
    <?php
    include 'koneksi.php';
    $nomor = $_GET['nomor'];
    $query = "SELECT * FROM Mahasiswa WHERE nim = '$nim'";
    $execQuery = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($execQuery);
    ?>
    <div class="container">
        <div class="form">
            <div class="card col-md-6 offset-md-3 mt-3">
                <div class="card-header bg-primary">
                    <h4 class="card-title text-center text-white">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="prosesedit.php" method="POST">
                         <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan nama" required value="<?= $data['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nomor">Nomor Induk Siswa</label>
                            <input id="nomor" type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required value="<?= $data['nomor'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="kelas">Kelas</label>
                            <input id="kelas" type="text" class="form-control" name="Jurusan" placeholder="Masukkan Jurusan" required value="<?= $data['kelas'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nilai">Nilai</label>
                            <input id="nilai" type="text" class="form-control" name="nilai" placeholder="Masukkan nilai" required value="<?= $data['nilai'] ?>">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-dark" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>