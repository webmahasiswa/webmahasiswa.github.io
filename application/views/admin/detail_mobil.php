<div class="content-wrapper">
<div class="content">
 	<?php foreach ($detail as $dt) : ?>
 		<div class="card">
 			<div class="card-body mt-5">
 				<div class="row">
 					<div class="col-md-5">
 						<img src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>" width='300px'>
 					</div>
 					<div class="col-md-7">
 						<table class="table">
 							<tr>
 								<td>Type Mobil</td>
 								<td>
 								<?php 
 								if($dt->kode_type == "SDN"){
 									echo "Sedan";
 								}elseif($dt->kode_type == "HTB"){
 									echo "Hatcback";
 								}elseif($dt->kode_type == "MPV"){
 									echo "Multi Purpose Vechile";
 								}else{
 									echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
 								 
 								}
 								?>
 								</td>
 							</tr>
 							<tr>
 								<td>Merek</td>
 								<td><?php echo $dt->merk ?></td>
 							</tr>
 							<tr>
 								<td>No Plat</td>
 								<td><?php echo $dt->no_plat ?></td>
 							</tr>
 							<tr>
 								<td>Warna</td>
 								<td><?php echo $dt->warna ?></td>
 							</tr>
 							<tr>
 								<td>Tahun</td>
 								<td><?php echo $dt->tahun ?></td>
 							</tr>
 							<tr>
 								<td>Status</td>
 								<td>
 									<?php 
 										if($dt->status == "0"){
 											echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
 										}else{
 											echo "<span class='badge badge-success'>Tersedia</span>";
 										}
 									 ?>
 								</td>
 							</tr>
 						</table>
 						<a class="btn btn-sm btn-danger" href="<?php echo base_url('Dasboard_admin/data_mobil') ?>">Kembali</a>
 						<a href="<?php echo base_url('Dasboard_admin/update_mobil/').$dt->id_mobil ?>" class="btn btn-sm btn-warning">Update</a>

 					</div>
 				</div>
 			</div>
 		</div>
 	<?php endforeach; ?>
</div>
</div>

