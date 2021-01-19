<?php 
	class Dasboard_admin extends CI_Controller
	{
		public function index()
		{
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dasboard');
			$this->load->view('templates_admin/footer');
		}
		public function data_bus()
		{
			$data['bus'] 	=  $this->rental_model->get_data('bus')->result();
	
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_bus',$data);
			$this->load->view('templates_admin/footer');	
		}
		public function data_customer()
		{
			$data['customer'] 	=  $this->rental_model->get_data('customer')->result();
	
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_customer',$data);
			$this->load->view('templates_admin/footer');	
		}
		public function data_body()
		{
			$data['body_bus'] 	=  $this->rental_model->get_data('body_bus')->result();
	
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_body',$data);
			$this->load->view('templates_admin/footer');	
		}
		public function tambah_cst()
		{
			$data['customer'] 	=  $this->rental_model->get_data('customer')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_customer',$data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_bus()
		{
			$data['bus'] 		=  $this->rental_model->get_data('bus')->result();
			$data['pemesanan'] 	=  $this->rental_model->get_data('pemesanan')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_bus',$data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_bdy()
		{
			$data['body_bus'] 	=  $this->rental_model->get_data('body_bus')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_body',$data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_pms()
		{
			$data['pemesanan'] 	=  $this->rental_model->get_data('pemesanan')->result();
			$data['body_bus'] 	=  $this->rental_model->get_data('body_bus')->result();
			$data['customer'] 	=  $this->rental_model->get_data('customer')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_pemesanan',$data);
			$this->load->view('templates_admin/footer');
		}

		public function data_pemesanan()
		{
			$data['pemesanan'] 	=  $this->rental_model->get_data('pemesanan')->result();
		
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_pemesanan',$data);
			$this->load->view('templates_admin/footer');
		}



		public function tambah_customer_aksi()
		{
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->tambah_cst();
			}else{
				$nama								= $this->input->post('nama');
				$alamat								= $this->input->post('alamat');
				$no_telpon							= $this->input->post('no_telpon');
				$nama_perusahaan_bus				= $this->input->post('nama_perusahaan_bus');
		

				
				$data = array(
						'nama'								=> $nama,
						'alamat'							=> $alamat,
						'no_telpon'							=> $no_telpon,
						'nama_perusahaan_bus'				=> $nama_perusahaan_bus
				);

				$this->rental_model->insert_data($data, 'customer');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_customer');

			}
		}

		public function _rules()
		{
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('no_telpon','no_telpon','required');
			$this->form_validation->set_rules('nama_perusahaan_bus','nama_perusahaan_bus','required');
		
		}

		public function tambah_pemesanan_aksi()
		{

				$merek							= $this->input->post('merek');
				$type_chasis					= $this->input->post('type_chasis');
				$id_body						= $this->input->post('id_body');
				$konfigurasi_kursi				= $this->input->post('konfigurasi_kursi');
				$tgl_pemesanan					= $this->input->post('tgl_pemesanan');
				$id_customer					= $this->input->post('id_customer');
		

				
				$data = array(
						'merek'							=> $merek,
						'type_chasis'					=> $type_chasis,
						'id_body'						=> $id_body,
						'konfigurasi_kursi'				=> $konfigurasi_kursi,
						'tgl_pemesanan'					=> $tgl_pemesanan,
						'id_customer'					=> $id_customer
				);

				$this->rental_model->insert_data($data, 'pemesanan');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pemesanan Berhasil Ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_pemesanan');
			
		}

		public function tambah_bus_aksi()
		{

				$kode_pemesanan					= $this->input->post('kode_pemesanan');
				$tgl_selesai					= $this->input->post('tgl_selesai');
				
		

				
				$data = array(
						'kode_pemesanan'				=> $kode_pemesanan,
						'tgl_selesai'					=> $tgl_selesai
				);

				$this->rental_model->insert_data($data, 'bus');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Bus Seleai Berhasil Ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_bus');
			
		}
		public function tambah_body_aksi()
		{

				$jenis_body						= $this->input->post('jenis_body');
				$jumlah_seat					= $this->input->post('jumlah_seat');
				$merek_seat						= $this->input->post('merek_seat');
				$ac								= $this->input->post('ac');
				$audio							= $this->input->post('audio');
				$toilet							= $this->input->post('toilet');
				$harga_body						= $this->input->post('harga_body');

		

				
				$data = array(
						'jenis_body'						=> $jenis_body,
						'jumlah_seat'						=> $jumlah_seat,
						'merek_seat'						=> $merek_seat,
						'ac'								=> $ac,
						'audio'								=> $audio,
						'toilet'							=> $toilet,
						'harga_body'						=> $harga_body
				);

				$this->rental_model->insert_data($data, 'body_bus');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Body Bus Berhasil Ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_body');
			
		}
		
		public function update_mobil($id)
		{
			$where = array('id_mobil'	=> $id);
			$data['mobil'] = $this->rental_model->edit_data($where, 'mobil')->result();
			

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_mobil',$data);
			$this->load->view('templates_admin/footer');

		}

		public function update_mobil_aksi()
		{
			$this->_rules();

			if($this->form_validation->run() == FALSE)
			{
				$this->update_mobil();
			}else{
				$id 				= $this->input->post('id_mobil');
				$kode_type			= $this->input->post('kode_type');
				$merk				= $this->input->post('merk');
				$no_plat			= $this->input->post('no_plat');
				$warna				= $this->input->post('warna');
				$tahun				= $this->input->post('tahun');
				$status				= $this->input->post('status');
				$gambar				= $_FILES['gambar']['name'];

				if($gambar){
					$config ['upload_path']		= './assets/upload';
					$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

					$this->load->library('upload', $config);
					if($this->upload->do_upload('gambar')){
						$gambar = $this->upload->data('file_name');
						$this->db->set('gambar', $gambar);
					}else{
						echo $this->upload->display_errors();
					}
				}
				$data = array(
						'kode_type'			=> $kode_type,
						'merk'				=> $merk,
						'no_plat'			=> $no_plat,
						'tahun'				=> $tahun,
						'warna'				=> $warna,
						'status'			=> $status,
						
				);

				$where = array(
					'id_mobil'		=> $id
				);
				$this->rental_model->update_mobil('mobil',$data, $where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mobil Berhasil Diupdate
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_mobil');
			}
		}

		public function detail_mobil($id)
		{
			$data['detail'] = $this->rental_model->ambil_id_mobil($id);

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/detail_mobil',$data);
			$this->load->view('templates_admin/footer');
		}

		public function hapus_mobil($id)
		{
			$where = array('id_mobil'		=> $id);
			$this->rental_model->delete_data($where, 'mobil');
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Mobil Berhasil Di Hapus
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_mobil');
		}


		//halaman customer
		public function index_customer()
		{
			
			$data['mobil'] 	=  $this->rental_model->get_data('mobil')->result();
			$this->load->view('templates_customer/header');
			$this->load->view('templates_customer/sidebar');
			$this->load->view('templates_customer/slide');
			$this->load->view('customer/dasboard',$data);
			$this->load->view('templates_customer/footer');
		}

		public function register()
		{
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->load->view('templates_customer/header_register');
				$this->load->view('register-login/register');
			}else{
				$nama 				= $this->input->post('nama');
				$username			= $this->input->post('username');
				$alamat				= $this->input->post('alamat');
				$no_ktp				= $this->input->post('no_ktp');
				$password			= $this->input->post('password');
				$gender				= $this->input->post('gender');
				$no_telepone		= $this->input->post('no_telepone');

			}

			$data = array(
						'nama'			=> $kode_type,
						'merk'				=> $merk,
						'no_plat'			=> $no_plat,
						'tahun'				=> $tahun,
						'warna'				=> $warna,
						'status'			=> $status,
						'gambar'			=> $gambar
				);

				$this->rental_model->insert_data($data, 'mobil');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mobil Berhasil Ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					 </div>');
				redirect('Dasboard_admin/data_mobil');
			
		}
	}
 ?>
 