<div class="content-wrapper">
 <div class="content">
 	<form method="POST" action="<?php echo base_url('Dasboard_admin/tambah_customer_aksi') ?>">
	 	<div class="form-group">
	 		<label>Nama Customer</label>
	 		<input type="text" name="nama" class="form-control">
	 		<?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Alamat</label>
	 		<input type="text" name="alamat" class="form-control">
	 		<?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>No Telp</label>
	 		<input type="text" name="no_telpon" class="form-control">
	 		<?php echo form_error('no_telpon','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>Nama perusahaan Bus</label>
	 		<input type="text" name="nama_perusahaan_bus" class="form-control">
	 		<?php echo form_error('nama_perusahaan_bus','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Simpan</button>
 	</form>
 </div>
</div>