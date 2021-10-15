<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Umroh extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mjamaah');
        $this->load->model('mberita');
    }
    public function index()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $jum = $this->mjamaah->count_jamaah();
        $page = $this->uri->segment(3);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 4;
        $config['base_url'] = base_url() . 'umroh/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $this->pagination->initialize($config);
        $x['page'] = $this->pagination->create_links();
        $x['news'] = $this->mjamaah->get_jamaah($offset, $limit);
        $x['brt'] = $this->mjamaah->tampil_jamaah();
        $this->load->view('front/v_umroh', $x);
    }
    function detail_jamaah()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $kode = $this->uri->segment(3);
        $x['brt'] = $this->mjamaah->tampil_jamaah();
        $x['news'] = $this->mjamaah->getjamaah($kode);
        $this->load->view('front/v_detail_haji', $x);
    }
}
