<div class="content-wrapper">
 <div class="content">
 	<h4>Form Pemesanan BUS</h4>
 	<form method="POST" action="<?php echo base_url('Dasboard_admin/tambah_pemesanan_aksi') ?>">
	 	<div class="form-group">
	 		<label>Merek</label>
	 		<select name="merek" class="form-control">
	 			<option>Pilih merek Bus</option>
	 			<option>Scania</option>
	 			<option>Mercedes benz</option>
	 			<option>Hino</option>
	 			<option>Volvo</option>
	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<label>Type Chasis</label>
	 		<select name="type_chasis" class="form-control">
	 			<option>Pilih type chasis</option>
	 			<option>Mercy 1626</option>
	 			<option>Mercy 1526</option>
	 			<option>Mercy O 500 RS</option>
	 			<option>Hino RK8</option>
	 			<option>Hino RN285</option>
	 			<option>Hino AK 215</option>
	 			<option>Scania K27OUA</option>
	 			<option>Scania K50IB</option>
	 			<option>Volvo B11R</option>
	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<label>Kode Body</label>
	 		<select name="id_body" class="form-control">
	 			<option>Pilih Body Bus</option>
	 			<?php foreach($body_bus as $tp) : ?>
	 			 	<option value="<?php echo $tp->id_body ?>"><?php echo $tp->jenis_body ?></option>
	 			<?php endforeach; ?>
	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<label>Konfigurasi Kursi/seat</label>
	 		<select name="konfigurasi_kursi" class="form-control">
	 			<option>Pilih Body Bus</option>
	 			<option>1-1-1</option>
	 			<option>2-1</option>
	 			<option>2-2</option>
	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<label>Tgl Pemesanan</label>
	 		<input type="date" name="tgl_pemesanan" class="form-control">
	 		<?php echo form_error('tanggal_pemesanan','<div class="text-small text-danger">','</div>') ?>
	 	</div>
	 	<div class="form-group">
	 		<label>ID CUSTOMER</label>
	 		<select name="id_customer" class="form-control">
	 			<option>Pilih Customer</option>
	 			<?php foreach($customer as $tp) : ?>
	 			 	<option value="<?php echo $tp->id_customer ?>"><?php echo $tp->id_customer ?></option>
	 			<?php endforeach; ?>
	 		</select>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Simpan</button>
 	</form>
 </div>
</div>