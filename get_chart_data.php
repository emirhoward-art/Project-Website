<?php
header('Content-Type: application/json');
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT kuartal, jumlah FROM capaian_proyek ORDER BY id ASC");

$labels = [];
$values = [];
$total = 0;

while ($row = mysqli_fetch_assoc($query)) {
    $labels[] = $row['kuartal'];
    $angka = (int) $row['jumlah'];
    $values[] = $angka;
    $total += $angka;
}

echo json_encode([
    'labels' => $labels,
    'values' => $values,
    'total'  => $total
]);
?>