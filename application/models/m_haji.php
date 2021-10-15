<?php
class M_haji extends CI_Model{
    public function index()
    {
        $hasil=$this->db->query("select * from haji order by created_at desc");
		return $hasil;
    }

    function update($kode,$no_pendaftaran,$nama_jemaah,$tempat_lahir,$tanggal_lahir,$alamat,$paket,$keberangkatan,$tempat_daftar){
		$hsl=$this->db->query("UPDATE haji SET no_pendaftaran='$no_pendaftaran',nama_jemaah='$nama_jemaah',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',paket='$paket',keberangkatan='$keberangkatan',tempat_daftar='$tempat_daftar' WHERE id='$kode'");
		return $hsl;
	}

    public function hapus($id)
    {
        $hasil=$this->db->query("delete from haji where id='$id'");
		return $hasil;
    }

    public function status($no_pendaftaran)
    {
        $hasil=$this->db->query("select * from haji where no_pendaftaran='$no_pendaftaran'");
		return $hasil->num_rows();
    }

    public function import($array)
    {
        $query = "insert into haji (no_pendaftaran, nama_jemaah, tempat_lahir, tanggal_lahir, alamat, paket, keberangkatan, tempat_daftar) values";
        foreach ($array as $i => $arr) {
            if($i > 0){
                $no_pendaftaran=$arr[0];
                $nama_jemaah=$arr[1];
                $tempat_lahir=$arr[2];
                $tanggal_lahir=$arr[3];
                $alamat=$arr[4];
                $paket=$arr[5];
                $keberangkatan=$arr[6];
                $tempat_daftar=$arr[7];
                $query .= "('$no_pendaftaran','$nama_jemaah','$tempat_lahir','$tanggal_lahir','$alamat','$paket','$keberangkatan','$tempat_daftar'), ";
            }
        }
        $query = rtrim($query, ", ");

        $hasil=$this->db->query($query);
		return $hasil;
    }
}