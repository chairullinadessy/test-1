<?php
class MJamaah extends CI_Model{

	function count_jamaah(){
		$hasil=$this->db->query("select * from jamaah");
		return $hasil;
	}

	function get_jamaah($offset,$limit){
		$hasil=$this->db->query("select * from jamaah order by idjamaah DESC limit $offset,$limit");
		return $hasil;
	}
	function SimpanJamaah($nama_jamaah,$deskripsi,$gambar){
		$hasil=$this->db->query("INSERT INTO jamaah(nama_jamaah,deskripsi,gambar) VALUES ('$nama_jamaah','$deskripsi','$gambar')");
		return $hasil;
	}
	function tampil_jamaah(){
		$hasil=$this->db->query("select * from jamaah order by idjamaah DESC");
		return $hasil;
	}
	function getjamaah($kode){
		$hasil=$this->db->query("select * from jamaah where idjamaah='$kode'");
		return $hasil;
	}
	function update_jamaah_with_img($kode,$nama_jamaah,$deskripsi,$gambar){
		$hasil=$this->db->query("UPDATE jamaah SET nama_jamaah='$nama_jamaah',deskripsi='$deskripsi',gambar='$gambar' WHERE idjamaah='$kode'");
		return $hasil;
	}
	function update_jamaah_no_img($kode,$nama_jamaah,$deskripsi){
		$hasil=$this->db->query("UPDATE jamaah SET nama_jamaah='$nama_jamaah',deskripsi='$deskripsi' WHERE idjamaah='$kode'");
		return $hasil;
	}
	function hapus_jamaah($id){
		$hasil=$this->db->query("delete from jamaah where idjamaah='$id'");
		return $hasil;
	}
	
}