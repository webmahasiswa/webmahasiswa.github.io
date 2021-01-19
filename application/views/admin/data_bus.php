<div class="content-wrapper">
 <div class="content">
 	<h4>Data Bus Selesai Dibuat</h4>
 	<a href="<?php echo base_url('Dasboard_admin/tambah_bus') ?>" class="btn btn-primary mb-3 mt-3">Tambah Data</a>
 	<?php echo $this->session->flashdata('pesan') ?>

	<table class="table">
		<tr>
			<th>ID BUS</th>
			<th>KODE PEMESANAN</th>
			<th>TANGGAL SELESAI</th>			
			<th colspan="3"></th>
		</tr>
		
			<?php 
			foreach ($bus as $mb) : ?>
				<tr>
					<td><?php echo $mb->id_bus ?></td>
					<td><?php echo $mb->kode_pemesanan ?></td>
					<td><?php echo $mb->tgl_selesai ?></td>
					</tr>
			<?php endforeach; ?>
		
	</table>
</div>
</div>

