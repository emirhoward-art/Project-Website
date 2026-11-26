<section id="contact" class="section-band contact-section">
	<div class="container">
		<div class="section-heading">
			<span class="section-badge">Kontak</span>
			<h2 class="sr-only">Hubungi Ruang Bentuk</h2>
		</div>
		<div class="contact-intro">
			<p class="eyebrow">03 / Mulai percakapan</p>
			<h2>Punya tantangan<br><em>untuk diwujudkan?</em></h2>
			<p>Ceritakan ide, kebutuhan komponen, atau konsep kemasan Anda. Mari bahas kemungkinan langkah berikutnya.</p>
		</div>
		<form class="contact-form" action="simpan_kontak.php" method="post">
			<div class="row g-3">
				<div class="col-12 col-md-6">
					<label class="form-label" for="contactName">Nama</label>
					<input class="form-control" id="contactName" name="name" type="text" placeholder="Nama Anda" autocomplete="name" required>
				</div>
				<div class="col-12 col-md-6">
					<label class="form-label" for="contactEmail">Email</label>
					<input class="form-control" id="contactEmail" name="email" type="email" placeholder="nama@perusahaan.com" autocomplete="email" required>
				</div>
				<div class="col-12">
					<label class="form-label" for="contactMessage">Ceritakan kebutuhan Anda</label>
					<textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Material, fungsi, ukuran, volume, atau ide awal yang ingin dibahas..." required></textarea>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Kirim pesan <span aria-hidden="true">↗</span></button>
					
					<?php if (isset($_GET['status']) && $_GET['status'] === 'sukses') : ?>
						<p class="form-note text-success mt-2">Pesan Anda berhasil dikirim dan tersimpan di database!</p>
					<?php elseif (isset($_GET['status']) && $_GET['status'] === 'gagal') : ?>
						<p class="form-note text-danger mt-2">Gagal mengirim pesan. Pastikan semua kolom terisi dengan benar.</p>
					<?php endif; ?>
				</div>
			</div>
		</form>
	</div>
</section>