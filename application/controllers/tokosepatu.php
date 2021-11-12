<?php

defined('BASEPATH') or exit('no direct script access allowed');

class Toko extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Sepatu';
        $this->load->view('form-toko-sepatu', $data);
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Harus Di isi',
                'min_length' => 'Nama terlalu pendek'
            ]

        );

        $this->form_validation->set_rules(
            'telp',
            'No hp',
            'required|min_length[11]',
            [
                'required' => 'No HP Harus diisi',
                'min_length' => 'No HP terlalu pendek'
            ]

        );

        if ($this->form_validation->run() == false) {
            $this->load->view('form-toko-sepatu');
        } else {
            $this->load->model('ModelTokoSepatu');
            $data = [
                'nama' => $this->input->post('nama'),
                'telp' => $this->input->post('telp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga_sepatu' => $this->ModelTokoSepatu->harga($this->input->post('merk')),
            ];
            $this->load->view('data-toko-sepatu', $data);
        }
    }
}
