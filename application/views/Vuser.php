<?php include_once 'header.php'; ?>

<div class="container">

<br>
<h2>DATA USER</h2>
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
			<td><?php echo $user->data->NIM; ?></td>
			<td><?php echo $user->data->Nama; ?></td>
		</tr>	

		<?php?>
	    
	  </tbody>
	</table>

</div>