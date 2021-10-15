<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Haji extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_haji', 'mhaji');
    }

    public function index(){
        if($this->session->userdata('akses')=='1'){
        	$x['data']=$this->mhaji->index();
            $this->load->view('backend/v_haji', $x);
        }else{
            echo "Halaman tidak ditemukan";
        }
    }

    function update(){
    	$kode=$this->input->post('kode');
    	$no_pendaftaran=$this->input->post('no_pendaftaran');
    	$nama_jemaah=$this->input->post('nama_jemaah');
    	$tempat_lahir=$this->input->post('tempat_lahir');
    	$tanggal_lahir=$this->input->post('tanggal_lahir');
    	$alamat=$this->input->post('alamat');
    	$paket=$this->input->post('paket');
    	$keberangkatan=$this->input->post('keberangkatan');
    	$tempat_daftar=$this->input->post('tempat_daftar');
    	$this->mhaji->update($kode,$no_pendaftaran,$nama_jemaah,$tempat_lahir,$tanggal_lahir,$alamat,$paket,$keberangkatan,$tempat_daftar);
    	echo $this->session->set_flashdata('msg','info');
    	redirect('backend/haji');
    }

    public function hapus()
    {
        if($this->session->userdata('akses')=='1'){
            $id=$this->input->post('kode');
            $this->mhaji->hapus($id);
            echo $this->session->set_flashdata('msg','success-hapus');
            redirect('backend/haji');
        }else{
            echo "Halaman tidak ditemukan";
        }
    }

    public function import(){
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        if(isset($_FILES['excel']['name']) && in_array($_FILES['excel']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['excel']['name']);
            $extension = end($arr_file);
            if('csv' == $extension){
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['excel']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $run = $this->mhaji->import($sheetData);
            if($run){
                echo $this->session->set_flashdata('msg','upload');
            }else{
                echo $this->session->set_flashdata('msg','error');
            }
            redirect('backend/haji');
        }
    }
}