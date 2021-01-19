<div class="content-wrapper">
 <div class="content">
 	<form method="POST" action="<?php echo base_url('Dasboard_admin/tambah_body_aksi') ?>">
	 	<div class="form-group">
	 		<label>JENIS BODY</label>
	 		<select name="jenis_body" class="form-control">
	 			<option>Pilih jenis Body Bus</option>
	 			<option>JB 3+</option>
	 			<option>UHD</option>
	 			<option>MICRO BUS</option>
	 			<option>SDD</option>
	 		</select>
	 		<?php echo form_error('jenis_body','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>JUMLAH SEAT</label>
	 		<select name="jumlah_seat" class="form-control">
	 			<option>Pilih jumlah seat</option>
	 			<option>25</option>
	 			<option>40</option>
	 			<option>50</option>
	 			<option>55</option>
	 		</select>
	 		<?php echo form_error('jumlah_seat','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>MEREK SEAT</label>
	 		<select name="merek_seat" class="form-control">
	 			<option>Pilih Merek seat</option>
	 			<option>Rimba kencana</option>
	 			<option>AMG</option>
	 		</select>
	 		<?php echo form_error('merek_seat','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>AC</label>
	 		<select name="ac" class="form-control">
	 			<option>Pilih</option>
	 			<option>Yes</option>
	 			<option>No</option>
	 		</select>
	 		<?php echo form_error('ac','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>AUDIO</label>
	 		<select name="audio" class="form-control">
	 			<option>Pilih</option>
	 			<option>Yes</option>
	 			<option>No</option>
	 		</select>
	 		<?php echo form_error('audio','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>TOILET</label>
	 		<select name="toilet" class="form-control">
	 			<option>Pilih</option>
	 			<option>Yes</option>
	 			<option>No</option>
	 		</select>
	 		<?php echo form_error('toilet','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>HARGA BODY</label>
	 		<input type="text" name="harga_body" class="form-control">
	 		<?php echo form_error('harga_body','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Simpan</button>
 	</form>
 </div>
</div>