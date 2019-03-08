<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body>
<center>
<h1>Form Edit Sertifikat</h1></center>

<form action="<?=base_url().'index.php/sertifikat/update';?>" method="POST">
<div class="container">
<div class="row mt-3">
	<div class="col-md-12">
	<div class="form-group">
	    <label for="nama">Judul</label>
	    <input type="text" name="judul" class="form-control" id="nama" value="<?=$ayu['judul']?>" placeholder=" Masukan judul sertifikat ">
	</div>

	<div class="form-group">
	    <label for="nama">Event Perlombaan</label>
	    <input type="text"  name="event" class="form-control" id="nama" value="<?=$ayu['event']?>" placeholder="Masukan Event perlombaan ">
	</div>

	<div class="form-group">
	    <label for="nama">Tahun</label>
	    <input type="text"  name="tahun" class="form-control" id="nama" value="<?=$ayu['tahun']?>" placeholder="Masukan tahun perlombaan">
	</div>

	  <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
</div>
</div>
</div>
</form>
</table>