<?php include_once 'header.php'; ?>

<div class="container">

<br>
<h2>DATA MOTOR</h2>
<br>
<br>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">ID Motor</th>
	      <th scope="col">Tipe Motor</th>
	      <th scope="col">Harga Motor</th>
	    </tr>
	  </thead>

	  <tbody>
	    <?php 
	    $no = 1;
	    foreach ($motor as $key) {
		?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $key->id_motor; ?></td>
			<td><?php echo $key->tipe_motor; ?></td>
			<td><?php echo $key->harga_motor; ?></td>
		</tr>	

		<?php } ?>
	    
	  </tbody>
	</table>

</div>