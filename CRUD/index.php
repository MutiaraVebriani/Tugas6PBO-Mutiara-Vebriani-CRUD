<?php
include 'koneksi.php';
include 'proses.php';
?>

<!DOCTYPE html>
<html>
<head>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
        <img src="gambar/unesa.png" style="width: 40px">&nbsp;&nbsp;<a class="navbar-brand" href="#">Mutiara Vebriani || 20051214014</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          </div>
        </div>
      </nav>

	<title >Mutiara Vebriani_CRUD </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body >
	<style>
		body
		 {
		 	background-color: #141f1f;

		}
	</style>
<div class="container mt-3">

	<H1 class="text-center text-info"> TUGAS PBO CRUD PHP & MY SQL </H1>
	<p class="text-center text-light">CRUD adalah singkatan yang berasal dari Create, Read, Update, dan Delete, dimana keempat istilah tersebut merupakan fungsi utama yang nantinya diimplementasikan ke dalam basis data.</p>
	 
	 <!-- FORM AWAL -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-danger">
	    Form Input Data Mahasiswa Sistem Informasi 2020 B UNESA
	  </div>
	  <div class="card-body">
	   <form method="post" action="" class="card-header bg-dark text-white">
	   	<div class="form-group">
	   		<label>NIM</label>
	   		<input type="text" name="tnim" value="<?=@$vnim?>" class="form-control" placeholder="Masukan NIM" required="">
	   	</div>

	   	<div class="form-group">
	   		<label>Nama</label>
	   		<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan Nama" required="">
	   	</div>

	   	<div class="form-group">
	   		<label>Jenis Kelamin</label>
	   		<select class="form-control" name="tjk">
	   		<option value="<?=@$vjk?>"><?=@$vjk?></option>
	   		<option value="L">Laki-Laki</option>
	   		<option value="P">Perempuan </option>
	   		</select>
	   	</div>

	   	<div class="form-group">
	   		<label>Alamat</label>
	   		<textarea type="text" name="talm" class="form-control" placeholder="Masukan Alamat" required=""><?=@$valm?></textarea> 
	   	</div>

	   	<div class="form-group">
	   		<label>Kota</label>
	   		<input type="text" name="tkota" value="<?=@$vkot?>" class="form-control" placeholder="Masukan Kota" required="">
	   	</div>

	   		<div class="form-group" >
	   		<label>Email</label>
	   		<input type="text" name="tkeml" value="<?=@$veml?>" class="form-control" placeholder="Masukan Email" required="">
	   		<p> 
	   		</p>
	   	</div>
	   	<div class="form-group">
	   		<label>Foto</label>
	   		<input type="file" name="tfoto" value="<?=@$vfoto?>" required="" multiple >
	   		<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> 
	   	</div>
		

	   	<button type="Submit" class="btn-md btn-success" name="bsim" >Simpan</button>

	   	<button type="reset" class="btn-md btn-danger" name="bres">Kosongkan</button>

	   </form>
	  </div>
	</div>
	<!-- FORM AKHIR -->
 
<!-- TABEL AWAL -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-danger">
	    Data Mahasiswa Sistem Informasi 2020 B UNESA
	  </div>
	  <div class="card-body">
	   <table class="table table-bordered  bg-dark text-white">
	   	<tr>
	   		
	   		<th>No</th>
	   		<th>NIM</th>
	   		<th>Nama</th>
	   		<th>Jenis Kelamin</th>
	   		<th>Alamat</th>
	   		<th>Kota</th>
	   		<th>Email</th>
	   		<th>Foto</th>
	   		<th>Aksi</th>

	   	</tr>

	   	<?php
	   		$no =1;
	   		$tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id desc");
	   	while($data =mysqli_fetch_array ($tampil)) :
	   	?>

	   	<tr>
	   		<td><?=$no++?></td>
	   		<td><?=$data['nim']?></td>
	   		<td><?=$data['namamhs']?></td>
	   		<td><?=$data['jk']?></td>
	   		<td><?=$data['alamat']?></td>
	   		<td><?=$data['kota']?></td>
	   		<td><?=$data['email']?></td>
	   		<td><?=$data['foto']?></td>
	   		<td>
	   			<a href="index.php?hal=edit&id=<?=$data['id']?>" class="btn-sm btn-warning"> Edit </a>
	   			<p></p>
	   			<a href="index.php?hal=hapus&id=<?=$data['id']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn-sm btn-danger"> Hapus </a>
	   		</td>

	   	</tr>
	   <?php endwhile;//penutup while?>

	   </table>
	  </div>
	</div>
	<!-- TABEL AKHIR -->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
