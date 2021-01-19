<div class="content-wrapper">
 <div class="content">
 	<h4>Data pemesanan Bus</h4>
 	<a href="<?php echo base_url('Dasboard_admin/tambah_pms') ?>" class="btn btn-primary mb-3 mt-3">Pemesanan Baru</a>
 	<?php echo $this->session->flashdata('pesan') ?>

	<table class="table">
		<tr>
			<th>KODE PEMESANAN</th>
			<th>MEREK</th>
			<th>TYPE CHASIS</th>
			<th>ID BODY</th>
			<th>KONFIGURASI SEAT//KURSI</th>
			<th>TANGGAL PEMESANAN</th>
			<th>ID CUSTOMER</th>
			<th colspan="3"></th>
		</tr>
		
			<?php 
			foreach ($pemesanan as $mb) : ?>
				<tr>
					<td><?php echo $mb->kode_pemesanan ?></td>
					<td><?php echo $mb->merek ?></td>
					<td><?php echo $mb->type_chasis ?></td>
					<td><?php echo $mb->id_body ?></td>
					<td><?php echo $mb->konfigurasi_kursi ?></td>
					<td><?php echo $mb->tgl_pemesanan ?></td>
					<td><?php echo $mb->id_customer ?></td>
					</tr>
			<?php endforeach; ?>
		
	</table>
</div>
</div>

