<?php include_once 'header.php'; ?>

<div class="container">

<br>

<h2>DATA PENJUALAN</h2>

<br>
<br>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">NIM</th>
	      <th scope="col">Nama</th>
	    </tr>
	  </thead>

	  <tbody>
	    <?php 
	    $no = 1;
		?>

		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $penjualan->data->nim_sales; ?></td>
			<td><?php echo $penjualan->data->nama_sales; ?></td>
		</tr>	

		<?php?>
	    
	  </tbody>
	</table>

</div>