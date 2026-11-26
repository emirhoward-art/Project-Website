<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['message'] ?? '');

    if ($nama !== '' && $email !== '' && $pesan !== '') {
        $stmt = mysqli_prepare($conn, "INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header("Location: index.php?status=sukses#contact");
            exit;
        }
        mysqli_stmt_close($stmt);
    }

    header("Location: index.php?status=gagal#contact");
    exit;
}
?>