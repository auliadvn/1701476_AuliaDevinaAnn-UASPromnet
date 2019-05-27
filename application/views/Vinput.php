<?php include_once 'header.php'; ?>

	<br>

<div class="container">
	<form action="<?php echo base_url("C_Motor/create") ?>" method="POST">
  		<fieldset>
    	<legend>Tambahkan Data</legend>
   			 <div class="form-group row">
           <label for="staticEmail" class="col-sm-2 col-form-label">ID Motor</label>
         <div class="col-sm-10">
             <select class="form-control" name="id_motor" id="id_motor">
                <option selected>-Pilih ID Motor-</option>
                <?php foreach ($motor->data as $key) { ?>
                <option value="<?php $key->id_motor ?>">
                    <?php echo $key->id_motor ?>
                </option>

            <?php } ?>
              </select>
         </div>
      </div>

		</fieldset>

		<button name="submit" class="btn btn-primary" align="center">Simpan</button>
	</form>

</div>
