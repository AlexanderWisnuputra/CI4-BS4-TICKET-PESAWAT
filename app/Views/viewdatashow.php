<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List Pesanan Tiket</title>
	<link rel="shortcut icon" type="image/png" href="/ticket.png">

</head>

	<style>
		body, html {
  height: 100%;
}

.bg {
  /* Gambar background */
  background-image: url("/sky.jpg");

  /* Ukuran gambar */
  height: 100%;

  /* Memposisikan gambar secara menyeluruh */
  background-position: cover;
  background-repeat: no-repeat;
  background-size: cover;
}

	</style>
	
	<head>
	<body>

    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css')?>" type="text/css">
    <div class = "bg">
		<h2 class="p-5" style="font-size:80px">List Pesanan</h2>
		<button type="button" class="btn btn-success m-5" onclick="window.location='/add'">Tambah Data</button>
		<button type="button" class="btn btn-secondary ml-5" onclick="window.location='/'">Kembali</button>

		<table class="table-hover table-l table-striped table-bordered ml-5" cellpadding="20px" bgcolor="white">
			 <thead class="thead-dark">
				<tr>
					<th >No.</th>
					<th>Nama Lengkap</th>
					<th>Nomor Identitas</th>
					<th>No.Hp</th>
					<th>Tempat Wisata</th>
					<th>Tanggal Kunjungan</th>			
					<th >Pengunjung Dewasa</th>
					<th >Pengujung Anak-Anak</th>
					<th >Total Bayar</th>
					<th >Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				foreach($datashow as $row) :
					$nomor++;
					?>
					<tr>
						<th class="text-center"><?= $nomor ?></th>
						<td> <?= $row->nama ?></td>
						<td> <?= $row->nik?></td>
						<td> <?= $row->hp?></td>
						<td> <?= $row->wisata?></td>
						<td> <?= $row->tanggal?></td>
						<td> <?= $row->dewasa?></td>
						<td> <?= $row->anak?></td>
						<td>Rp.  <?= $row->total ?> </td>
						<td>
							<button type="button" class="btn btn-info btn-sm" onclick="window.location='<?php echo site_url('/edit/'.$row->nik)?>'">Edit </button>
							<button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?= $row->nik ?>)">Delete</button>
						</td>
					</tr>
					<?php 
				endforeach;
				?>
			</div>
				</div>
			</tbody>
		</table>
		<script>
			function hapus(nik){
				pesan = confirm('Yakin ingin menghapus data?');
				if (pesan) {
					window.location.href = ("<?= site_url('/delete/') ?>") + nik;
				} else return false;
			}
		</script>
	</body>
</head>

