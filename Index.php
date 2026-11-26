<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rekayasa pemrosesan logam dan pengembangan kemasan premium yang dirancang dengan presisi.">
	<meta name="theme-color" content="#202321">
	<title>Ruang Bentuk | Engineering &amp; Packaging</title>

	<!-- Bootstrap: framework utama untuk layout, grid, navigasi, carousel, dan form. -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="believe.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light site-navbar">
		<div class="container">
			<a class="brand-mark" href="#home" aria-label="Ruang Bentuk, kembali ke beranda"><span>RB</span><small>ENGINEERING</small></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNavigation">
				<div class="navbar-nav ml-auto align-items-lg-center gap-lg-3">
					<a class="nav-link" href="#home">Beranda</a>
					<a class="nav-link" href="#services">Kapabilitas</a>
					<a class="nav-link" href="#about">Tentang</a>
					<a class="nav-link nav-contact-link" href="#contact">Mulai diskusi <span aria-hidden="true">↗</span></a>
				</div>
			</div>
		</div>
	</nav>

	<main>
		 <div id="home" class="carousel slide hero-carousel" data-ride="carousel" aria-label="Rekayasa dan manufaktur">
			<div class="carousel-indicators">
				<button type="button" data-target="#home" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1: engineering presisi"></button>
				<button type="button" data-target="#home" data-slide-to="1" aria-label="Slide 2: ide menjadi produk"></button>
				<button type="button" data-target="#home" data-slide-to="2" aria-label="Slide 3: kemasan berkarakter"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="hero-slide hero-slide-one">
						<div class="container hero-content">
							<p class="hero-kicker">Engineering · Metalworks · Packaging</p>
							<h1>Rekayasa presisi.<br><em>Hasil yang terasa.</em></h1>
							<p class="hero-copy">Kami mengolah material dan gagasan menjadi komponen logam serta kemasan premium yang siap diwujudkan.</p>
							<a class="btn btn-primary" href="#services">Jelajahi kapabilitas <span aria-hidden="true">↗</span></a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="hero-slide hero-slide-two">
						<div class="container hero-content">
							<p class="hero-kicker">Dari konsep menuju proses produksi</p>
							<h2>Detail teknis,<br><em>dibuat bernilai.</em></h2>
							<p class="hero-copy">Dukungan engineering dari pemilihan material dan prototipe hingga spesifikasi produksi yang terukur.</p>
							<a class="btn btn-primary" href="#about">Kenali pendekatan kami <span aria-hidden="true">↗</span></a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="hero-slide hero-slide-three">
						<div class="container hero-content">
							<p class="hero-kicker">Kemasan produk khusus</p>
							<h2>Kesan pertama,<br><em>dibentuk dengan cermat.</em></h2>
							<p class="hero-copy">Rancang kemasan cerutu dan produk premium dengan struktur, material, serta detail finishing yang selaras.</p>
							<a class="btn btn-primary" href="#contact">Diskusikan kebutuhan <span aria-hidden="true">↗</span></a>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-target="#home" data-slide="prev" aria-label="Slide sebelumnya">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-target="#home" data-slide="next" aria-label="Slide berikutnya">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>

		<?php 
		include ("services.php"); 
		?>

		<?php 
		include ("about.php"); 
		?>

		<?php 
		include ("contact.php"); 
		?>
		
	</main>

	<footer class="site-footer">
		<div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
			<a class="footer-brand" href="#home">RUANG BENTUK <span>/ ENGINEERING</span></a>
			<p class="mb-0">© <span id="currentYear">2026</span> Ruang Bentuk. Dibangun dengan presisi.</p>
			<a href="#home">Kembali ke atas ↑</a>
		</div>
	</footer>

	<!-- Bundle Bootstrap menyediakan interaksi navbar dan carousel. -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>
	<script>
		const processCanvas = document.getElementById("processChart");
		const processContext = processCanvas.getContext("2d");
		const processColors = getComputedStyle(document.documentElement);
		const processAccent = processColors.getPropertyValue("--blue-strong").trim();
		const completedProjectCounts = [7, 12, 8, 8];
		const completedProjectTotal = completedProjectCounts.reduce((total, count) => total + count, 0);
		document.getElementById("completedProjectTotal").textContent = completedProjectTotal;
		processCanvas.setAttribute(
			"aria-label",
			`Grafik jumlah proyek yang selesai pada tahun 2026: kuartal 1 ${completedProjectCounts[0]} proyek, kuartal 2 ${completedProjectCounts[1]} proyek, kuartal 3 ${completedProjectCounts[2]} proyek, dan kuartal 4 ${completedProjectCounts[3]} proyek. Total ${completedProjectTotal} proyek.`
		);
		const processFill = processContext.createLinearGradient(0, 0, 0, 240);
		processFill.addColorStop(0, "rgba(184, 111, 77, 0.24)");
		processFill.addColorStop(1, "rgba(184, 111, 77, 0.01)");

		const processChart = new Chart(processContext, {
			type: "bar",
			data: {
				labels: ["Q1", "Q2", "Q3", "Q4"],
				datasets: [{
					label: "Proyek selesai",
					data: completedProjectCounts,
					borderColor: processAccent,
					backgroundColor: processFill,
					borderRadius: 8,
					borderSkipped: false,
					maxBarThickness: 42
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				animation: false,
				plugins: {
					legend: { display: false },
					tooltip: {
						callbacks: {
						label: (context) => `${context.raw} proyek selesai`
						}
					}
				},
				scales: {
					x: {
						grid: { display: false },
						border: { display: false },
						ticks: {
							color: processColors.getPropertyValue("--ink-soft").trim(),
						font: { family: "Segoe UI, sans-serif", size: 11 },
						callback: (value, index) => `Kuartal ${index + 1}`
					}
					},
					y: {
					beginAtZero: true,
					max: 14,
					ticks: {
						stepSize: 2,
						padding: 8,
						color: processColors.getPropertyValue("--ink-soft").trim(),
						font: { family: "Segoe UI, sans-serif", size: 10 },
						callback: (value) => value
					},
					grid: { color: "rgba(39, 50, 43, 0.08)" },
					border: { display: false }
					}
				}
			}
		});
		window.addEventListener("resize", () => {
			const chartContainer = processCanvas.parentElement;
			const chartStyles = getComputedStyle(chartContainer);
			const chartWidth = chartContainer.clientWidth
				- parseFloat(chartStyles.paddingLeft)
				- parseFloat(chartStyles.paddingRight);
			const chartHeight = chartContainer.clientHeight
				- parseFloat(chartStyles.paddingTop)
				- parseFloat(chartStyles.paddingBottom);

			processChart.resize(chartWidth, chartHeight);
		});
	</script>
	<!-- Pastikan Chart.js sudah dimuat (lewati jika sudah ada di file Anda) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('processChart').getContext('2d');
    const totalElement = document.getElementById('completedProjectTotal');

    // 1. Inisialisasi Grafik (Tampilan disesuaikan dengan desain Anda)
    const processChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kuartal 1', 'Kuartal 2', 'Kuartal 3', 'Kuartal 4'],
            datasets: [{
                label: 'Proyek Selesai',
                data: [0, 0, 0, 0],
                backgroundColor: '#ebd9d1', // Warna batang lembut sesuai gambar
                borderRadius: 12,
                borderSkipped: false,
                barPercentage: 0.55
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 14,
                    ticks: { stepSize: 2, color: '#6b6b6b' },
                    grid: { color: 'rgba(0, 0, 0, 0.05)' },
                    border: { display: false }
                },
                x: {
                    grid: { display: false },
                    ticks: { color: '#6b6b6b' },
                    border: { display: false }
                }
            }
        }
    });

    // 2. Fungsi Mengambil Data Terbaru dari Database via AJAX/Fetch
    async function updateChartRealtime() {
        try {
            const response = await fetch('get_chart_data.php');
            const result = await response.json();

            // Perbarui label, nilai batang, dan angka total
            processChart.data.labels = result.labels;
            processChart.data.datasets[0].data = result.values;
            processChart.update();

            if (totalElement) {
                totalElement.textContent = result.total;
            }
        } catch (error) {
            console.error('Gagal mengambil data grafik:', error);
        }
    }

    // Panggil pertama kali saat halaman dibuka
    updateChartRealtime();

    // 3. Jalankan pengecekan otomatis setiap 3 detik (3000 ms) secara realtime
    setInterval(updateChartRealtime, 3000);
});
</script>

</body>
</html>
