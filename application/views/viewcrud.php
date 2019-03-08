<center>
<div class="row mt-3">
  <div class="col-md-5">
   <form action="<?php echo base_url()?>index.php/sertifikat/search" method="post">
    <div class="input-group">
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="form-control" placeholder="Cari data sertifikat . . ." name="keyword">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </div>
   </form>
  </div>
 </div>
</center>

<center><h1>Data Prestasi</h1></center>

<div class="container">
<table border="1" class="table"  class="thead-light">
	<thead class="thead-dark">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Event Perlombaan</th>
		<th>Tahun</th>
		<th>Aksi</th>

	</tr></thead>
	<?php
	$no=1;


	foreach($data as $ayu) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $ayu['judul'] ?></td>
		<td><?php echo $ayu['event'] ?></td>
		<td><?php echo $ayu['tahun'] ?></td>
		<td><a href="<?=base_url().'index.php/sertifikat/delete/'.$ayu['id_sertifikat']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/sertifikat/update/'.$ayu['id_sertifikat']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>