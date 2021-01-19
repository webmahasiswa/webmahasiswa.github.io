<?php 
	class rental_model extends CI_Model
	{
		public function get_data($table)
		{
			return $this->db->get($table);
		}

		public function insert_data($data,$table){
			$this->db->insert($table,$data);
		}

		public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
		}

		public function update_mobil($table,$data,$where){
			$this->db->update($table,$data,$where);
		}

		public function ambil_id_mobil($id)
		{
			$hasil = $this->db->where('kode_mobil', $id)->get('mobil');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return false;
			}
		}

		public function delete_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
 ?>