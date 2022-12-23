<?php
if ($_POST) {
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $nomor = $_POST['nim'];
    $kelas = $_POST['jurusan'];
    $nilai = $_POST['nilai'];

    $query = "INSERT INTO siswa VALUES ('$nama', '$nim', '$jurusan', '$nilai')";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'tambah.php';
        </script>";
    }
} else {
    echo "No Access";
}