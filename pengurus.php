<?php 
require_once 'config/config.php';
require_once 'layout/head.php';
require_once 'layout/header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Pengurus</h2>
			<p>
				Rumah Retret St Yoseph Karmel terletak di Kilometer 45 Jalan Raya Denpasar Singaraja, di Desa Batunya , 6 km sebelum danau Bedugul—Bali. Kini daya tampung Rumah kurang lebih 55 orang. Fasilitas lainnya adalah Ruang Pertemuan dengan kapasitas 100 orang ,Ruang Baca, Kapel, Ruang Devosi Kerahiman, Goa Maria Bunda Karmel dan Jalan Salib. 
			</p>
		</div>
		<!-- pengurus profil start -->
		<div class="col-md-12">
			<div class="col-md-6">
				<!-- photo -->
				<div class="col-md-4">
					<img class="img-circle" src="<?php echo base_url;?>asset/img/romo-joger.jpg" alt="Romo Yoseph Gerungan O’Carm" width="150" heigth="100">
				</div>
				<!-- description -->
				<div class="col-md-8">
					<h4>Romo Yoseph Gerungan O’Carm</h4>
					<p>
						Lahir di Samarinda Kalimantan Barat pada tanggal 26 Maret 1956 dan ditahbiskan menjadi imam Ordo Carmelit pada tanggal 5 September 1991. Saat ini berkarya sebagai Pemimpin di Biara Carmel Baturiti Bedugul Buleleng Bali. 
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<!-- photo -->
				<div class="col-md-4">
					<img class="img-circle" src="<?php echo base_url;?>asset/img/romo-domi.png" alt="Romo Dominikus Dinong O’Carm" width="150" heigth="100">
				</div>
				<!-- description -->
				<div class="col-md-8">
					<h4>Romo Dominikus Dinong O’Carm</h4>
					<p>
						Lahir di Mauloo, Kab. Sikka– NTT tanggal 17 Januari 1976. Ditahbiskan sebagai Imam Ordo Karmel pada tanggal 22 Agustus 2003. Saat ini berkarya sebagai Direktur Spiritualitas Rumah Retret Karmel Baturiti.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				<!-- photo -->
				<div class="col-md-4">
					<img class="img-circle" src="<?php echo base_url;?>asset/img/romo-gusti.jpg" alt="Romo Agustinus Audagtus, O.Carm" width="150" heigth="100">
				</div>
				<!-- description -->
				<div class="col-md-8">
					<h4>Romo Agustinus Audagtus, O.Carm</h4>
					<p>
						Lahir di Maumere, Flores pada tanggal 21 Agustus 1976 dan ditahbiskan menjadi imam Ordo Carmelit pada tanggal 22 Agustus 2003. Berkarya di Biara Karmel Baturiti, Bedugul sejak 2013.
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<!-- photo -->
				<div class="col-md-4">
					<img class="img-circle" src="<?php echo base_url;?>asset/img/romo-stanis.jpg" alt="Romo Stanislaus Jenambur, O.Carm" width="150" heigth="100">
				</div>
				<!-- description -->
				<div class="col-md-8">
					<h4>Romo Stanislaus Jenambur, O.Carm</h4>
					<p>
						Lahir di Ruteng, pada tanggal 21 Januari 1981 dan ditahbiskan menjadi Imam Ordo Carmelit pada 10 Agustus 2010. Berkarya di Biara Karmel Baturiti, Bedugul sejak November 2015
					</p>
				</div>
			</div>
		</div>
		<!-- pengurus profil end -->
		<!-- maps karmel bali -->
		<div class="col-md-12">
			<div id="karmelMap" style="width:100%;height:380px; margin-bottom: 20px; margin-top: 20px;"></div>
		</div>
	</div>
</div>
<?php
require_once 'layout/footer.php';
?>