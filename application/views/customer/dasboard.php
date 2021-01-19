
      
  
        <div class="row"> 
          <?php foreach($mobil as $mb) : ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" style="width:253px; height: 150px;" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $mb->merk ?></a>
                </h4>
                <h5><?php echo $mb->tahun ?></h5>
              </div>
              <div class="card-footer">
                  <?php 
                      if($mb->status == "0"){
                        echo "<span class='btn btn-danger' disable>Telah di sewa</span>";
                      }else{
                        echo anchor('customer/rental/tambah_rental'.$mb->id_mobil, '<button class="btn btn-success">Sewa</button>');
                      }
                   ?>
                   <a class="btn btn-warning" href="">Detail</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
        <!-- /.row -->

      