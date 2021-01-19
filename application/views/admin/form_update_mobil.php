<div class="content-wrapper">
 <div class="content">

 	<?php 
 		foreach ($mobil as $mb) : 
 	?>

 	<form method="POST" action="<?php echo base_url('Dasboard_admin/update_mobil_aksi') ?>" enctype="multipart/form-data">
	 	<div class="form-group">
	 		<label>Type Mobil</label>
	 		<input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
	 		<select name="kode_type" class="form-control">
	 			<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
	 			<?php foreach($type as $tp) : ?>
	 			 	<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
	 			<?php endforeach; ?>
	 		</select>
	 		<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Merek</label>
	 		<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
	 		<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>No Plat</label>
	 		<input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
	 		<?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Warna</label>
	 		<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
	 		<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Tahun</label>
	 		<input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
	 		<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Status</label>
	 		<select name="status" class="form-control">
	 			<option
	 			<?php 
		 			if($mb->status == "1"){
		 				echo "selected='selected'";
		 			}
		 			echo $mb->status; ?> value="1">
		 			Tersedia
	 			</option>

	 			<option
	 			<?php 
		 			if($mb->status == "0"){
		 				echo "selected='selected'";
		 			}
		 			echo $mb->status; ?> value="0">
		 			Tidak Tersedia
	 			</option>
	 			
	 		</select>
	 		<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Gambar</label>
	 		<input type="file" name="gambar" class="form-control">
	 	</div>
	 	<button type="submit" class="btn btn-primary">Simpan</button>
 	</form>
 	<?php endforeach; ?>
 </div>
</div>