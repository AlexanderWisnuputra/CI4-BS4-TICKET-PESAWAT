<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Product</title>
	<link rel="shortcut icon" type="image/png" href="/ticket.png">
</head>
<head>
	<body style="background-image: url(/polygon.jpg); height: 100%; background-size: cover;")>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css')?>" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<h2 style="font-size: 50px; margin: 100px;">Form Edit Produk</h2>
	<?= form_open('/edit') ?>
	<form>

<table style="margin-left: 100px; font-size: 26px">
	<tr>
	    <td>Nama Lengkap :</td>
		<td>
        <input type="text" name="nama" maxlength="10" value="<?= $nama; ?>">		
    </td>
	</tr>	
		<td >Nomor Identitas :</td>
		<td>
			<input type="text" name="nik" style="height:40px" readonly value="<?= $nik; ?>" maxlength="16">
		</td>
	</tr>	
	<tr>
		<td >No.Hp:</td>
		<td>
		<input type="text" name="hp" style="height:40px  " maxlength="13" value="<?= $hp; ?>">
		</td>
	</tr>
	<td ><label for="wisata">Tempat Wisata:</label></td>
		<td>

<select name="wisata" onselect="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>$('select').on('change', function() {
   var element = $("input[name='harga']")
   element.val(this.value );
  
});
</script>
  <option value=""></option>
  <option value="10000">Dufan </option>
  <option value="20000">Monas</option>
  <option value="30000">Sea World</option>

</script>
</select>
		</td>
	</tr>
	<tr>
		<td>Tanggal Kunjungan :</td>
		<td>
			<input type="date" name="tanggal" placeholder="dd-mm-yyyy"  value=""
        min="1997-01-01" max="2030-12-31" value="<?= $tanggal; ?>">
		</td>
	</tr>
		<tr>
		<td >Pengunjung Dewasa:</td>
		<td>
			<input type="text" name="dewasa" style="height:40px  " maxlength="5" value="<?= $dewasa; ?>" id="dewasa">
		</script>
		</td>
	</tr>
	<tr>
		<td >Pengunjung Anak-Anak:</td>
		<td>
			<input type="text" name="anak" style="height:40px  " maxlength="5" value="<?= $anak; ?>" id="anak" >
		</td>
	</tr>
		<tr>
		<td style="font-size:12px">Usia dibawah 12 tahun</td>
	</tr>
	<tr>
		<td >Harga Tiket :</td>
		<td>
			<input type="text" name="harga" style="height:40px  " maxlength="15" id="harga">
		</td>
	</tr>
</form>
	<tr>
		<td >Total Bayar :</td>
		<td>

			<input type="text" name="total" style="height:40px  " maxlength="10" id="total">
		</td>
	</tr>
	<tr>

		<td>

<input type="button" value="Total Bayar" onclick="calc()" />
<script>
    function calc() { 
    	var x = document.getElementById("harga").value
       TODO: sum = parseInt( +anak.value/2  + +dewasa.value)*+x

       document.getElementById("total").value = sum;
    }
</script>			
			<input class="btn btn-primary btn-lg" type="submit"  value="Pesan Tiket">
			<button type="button" class="btn btn-secondary btn-lg ml-5" onclick="window.location='/'">Kembali</button>	
				</td>
	</tr>
</table>
<script>
	 $('#package').on('change', function(){
  // ambil data dari elemen option yang dipilih
  const dewasa = $('#package option:selected').data('dewasa');
  const anak = $('#package option:selected').data('anak');
  const total = $('#package option:selected').data('total');
  
  // kalkulasi total harga
  const totalDiscount = (anak/2) + dewasa
  const total = totalDiscount * 1000;
  
  $('[name=total]').val(total);


});
</script>
<?= form_close();?>

		</table>
	</body>

</head>