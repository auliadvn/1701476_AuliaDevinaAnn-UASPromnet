<?php include_once 'header.php'; ?>

<div class="container">

<br>
<h2>DATA UANG MUKA</h2>
<br>
<br>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">ID Uang Muka</th>
	      <th scope="col">Uang Muka</th>
	    </tr>
	  </thead>

	  <tbody>
	    <?php 
	    $no = 1;
	    foreach ($uang as $key) {
		?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $key->id_uang_muka; ?></td>
			<td><?php echo $key->uang_muka; ?></td>
		</tr>	

		<?php } ?>
	    
	  </tbody>
	</table>

</div>