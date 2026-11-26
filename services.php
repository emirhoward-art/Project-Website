<?php
include 'koneksi.php';

// Ganti 'nama_tabel_anda' dengan nama tabel tempat menyimpan data layanan
$query_services = mysqli_query($conn, "SELECT * FROM services ORDER BY id ASC");

// Array label kategori agar badge kecil di atas judul tetap sesuai desain awal
$badges = [
    1 => "01 / METALWORKS",
    2 => "02 / SPECIALTY PACKAGING",
    3 => "03 / ENGINEERING"
];
?>

<section id="services" class="section-band services-section">
	<div class="container">
		<div class="section-heading">
			<span class="section-badge">Kapabilitas</span>
			<h2 class="sr-only">Kapabilitas engineering dan manufaktur</h2>
		</div>
		<div class="section-intro">
			<p class="eyebrow">01 / Yang kami kerjakan</p>
			<h2>Solusi yang berangkat<br>dari <em>material.</em></h2>
			<p>Dari kebutuhan teknis sampai pengalaman membuka kemasan, setiap keputusan desain punya fungsi.</p>
		</div>
		<div class="row g-4">
			<?php while ($row = mysqli_fetch_assoc($query_services)) : ?>
				<?php 
					// Mengambil teks badge berdasarkan id, atau fallback otomatis jika ada data baru
					$badge_text = $badges[$row['id']] ?? sprintf("%02d / SERVICE", $row['id']); 
				?>
				<div class="col-12 col-md-4">
					<div class="service-item h-100">
						<span class="service-number"><?= htmlspecialchars($badge_text); ?></span>
						<h3><?= htmlspecialchars($row['layanan']); ?></h3>
						<p><?= htmlspecialchars($row['keterangan']); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>