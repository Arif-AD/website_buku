<?php
defined('BASEPATH') or exit('No direct script access allowed');

class book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_book', 'm_book');
    }

    public function getdata($id)
    {
        $data = $this->m_book->getById($id);
        echo json_encode($data);
    }

    public function hapus($id)
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'admin') {
            redirect(base_url());
        }
        
        $trx = $this->db->get_where('buku', ['id'=>$id])->row_array();
        $buku = $this->db->get_where('buku', ['kd_buku'=>$trx['kd_buku']])->row_array();

        if($trx['tgl_kembali'] == ''){
            $jml_buku = (int)$buku['jumlah'];
            $stokbaru = $jml_buku + 1;
        }else{
            $stokbaru = $buku['jumlah'];
        }

        if($this->db->delete('buku', ['id'=> $id]) && $this->db->update('buku', ['jumlah'=>$stokbaru], ['kd_buku'=>$trx['kd_buku']])){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Data!</div>');
            redirect('/admin');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gagal Hapus Data!</div>');
            redirect('/admin');
        }
    }
}
