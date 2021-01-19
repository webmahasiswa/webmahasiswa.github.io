<div class="content-wrapper">
 <div class="content">
 	<h4>Data Body Bus</h4>
 	<a href="<?php echo base_url('Dasboard_admin/tambah_bdy') ?>" class="btn btn-primary mb-3 mt-3">Tambah Data</a>
 	<?php echo $this->session->flashdata('pesan') ?>

	<table class="table">
		<tr>
			<th>ID BODY</th>
			<th>JENIS BODY</th>
			<th>JUMLAH SEAT/JOK</th>
			<th>MEREK SEAT/JOK</th>
			<th>AC</th>
			<th>AUDIO</th>
			<th>TOILET</th>
			<th>HARGA BODY</th>
			<th colspan="3"></th>
		</tr>
		
			<?php 
			foreach ($body_bus as $mb) : ?>
				<tr>
					<td><?php echo $mb->id_body ?></td>
					<td><?php echo $mb->jenis_body ?></td>
					<td><?php echo $mb->jumlah_seat ?></td>
					<td><?php echo $mb->merek_seat ?></td>
					<td><?php echo $mb->ac ?></td>
					<td><?php echo $mb->audio ?></td>
					<td><?php echo $mb->toilet; ?></td>
					<td><?php echo $mb->harga_body; ?></td>
					
					</tr>
			<?php endforeach; ?>
		
	</table>
</div>
</div>

