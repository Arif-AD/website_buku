<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_book', 'm_book');
    }

    public function buku()
    {
        $data['title'] = 'Buku';
        if(isset($_GET['cari'])){
            $data['buku'] = $this->db->order_by('id', 'desc')->like('judul_buku', $_GET['cari'])->get('buku')->result_array();
        }else{
            $data['buku'] = $this->db->order_by('id', 'desc')->get('buku')->result_array();
        }
        $this->template->load('user/template', 'pages/buku', $data);
    }

    public function tentang()
    {
        $data['title'] = 'Tentang';
        $this->template->load('user/template', 'pages/tentang', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        $this->template->load('user/template', 'pages/kontak', $data);
    }
}
