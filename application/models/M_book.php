<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_book extends CI_Model {

	public function getdata()
	{
		$this->db->select('buku.judul_buku, book.*');
		$this->db->from('book');
		$this->db->join('buku', 'book.kd_buku = buku.kd_buku');
		$this->db->order_by('id', 'desc');
		return $this->db->get()->result_array();
	}

	public function getById($id)
	{
		$this->db->select('buku.judul_buku, book.*');
		$this->db->from('book');
		$this->db->join('buku', 'book.kd_buku = buku.kd_buku');
		$this->db->where('book.id', $id);
		return $this->db->get()->row_array();
	}
}