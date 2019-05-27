<?php include_once 'header.php'; ?>

<div class="container">

<br>
<h2>DATA CICILAN</h2>
<br>
<br>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">ID Cicil</th>
	      <th scope="col">Tenor</th>
	      <th scope="col">Bunga</th>
	    </tr>
	  </thead>

	  <tbody>
	    <?php 
	    $no = 1;
	    foreach ($cicil as $key) {
		?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $key->id_cicil; ?></td>
			<td><?php echo $key->tenor; ?></td>
			<td><?php echo $key->bunga; ?></td>
		</tr>	

		<?php } ?>
	    
	  </tbody>
	</table>

</div>