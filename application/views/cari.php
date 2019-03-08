
 <center><h1>Data Sertifikat</h1></center>

<div class="container">
<table border="1" class="table"  class="thead-light">
	<thead class="thead-dark">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Event Perlombaan</th>
		<th>Tahun</th>
	</tr>
</thead>

	<?php
	$no=1;
	foreach($result as $ayu) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $ayu->id_sertifikat ?></td>
		<td><?php echo $ayu->judul ?></td>
		<td><?php echo $ayu->event ?></td>
		<td><?php echo $ayu->tahun ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>