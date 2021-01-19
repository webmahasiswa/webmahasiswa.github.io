<div class="content-wrapper">
 <div class="content">
 	<h4>Form BUS Sudah Selesai Dibuat</h4>
 	<form method="POST" action="<?php echo base_url('Dasboard_admin/tambah_bus_aksi') ?>">
 		<div class="form-group">
	 		<label>Kode Pemesanan</label>
	 		<select name="kode_pemesanan" class="form-control">
	 			<option>Pilih Kode Pemesanan</option>
	 			<?php foreach($pemesanan as $tp) : ?>
	 			 	<option value="<?php echo $tp->kode_pemesanan ?>"><?php echo $tp->kode_pemesanan ?></option>
	 			<?php endforeach; ?>
	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<label>Tgl selesai</label>
	 		<input type="date" name="tgl_selesai" class="form-control">
	 		<?php echo form_error('tgl_selesai','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Simpan</button>
 	</form>
 </div>
</div>