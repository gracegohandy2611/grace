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
    <div class="container">
        <a href="./tambah.php" class="btn btn-primary mt-5 mb-2">Tambah Data</a>
        <div class="">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                </tr>

                <?php
                include './koneksi.php';
                $query = "SELECT * FROM Mahasiswa";
                $exeQuery = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_assoc($exeQuery)) {
                ?>
                    <tr>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['jurusan'] ?></td>
                        <td><?= $data['nilai'] ?></td>
                        <td>
                            <a onclick="return confirm('Apakah yakin anda ingin menghapus data')" href="hapus.php?nomor=<?= $data['nomor'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="edit.php?nomor=<?= $data['nomor'] ?>" class="btn btn-info btn-sm text-white">Edit</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>