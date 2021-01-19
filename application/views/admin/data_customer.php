<div class="content-wrapper">
 <div class="content">
 	<h4>Data Customer</h4>
 	<a href="<?php echo base_url('Dasboard_admin/tambah_cst') ?>" class="btn btn-primary mb-3 mt-3">Tambah data</a>
 	<?php echo $this->session->flashdata('pesan') ?>

	<table class="table">
		<tr>
			<th>ID CUSTOMER</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO TELP</th>
			<th>NAMA PERUSAHAAN BUS/PO</th>
			<th colspan="3"></th>
		</tr>
		
			<?php 
			foreach ($customer as $mb) : ?>
				<tr>
					<td><?php echo $mb->id_customer ?></td>
					<td><?php echo $mb->nama ?></td>
					<td><?php echo $mb->alamat ?></td>
					<td><?php echo $mb->no_telpon ?></td>
					<td><?php echo $mb->nama_perusahaan_bus ?></td>
					</tr>
			<?php endforeach; ?>
		
	</table>
</div>
</div>

