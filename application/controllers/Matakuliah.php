<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
		$this->load->view('view-form-matakuliah.php');
	}

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]',[
            'required' => 'Kode Matakuliah Harus Diisi',
            'min_length' => 'Kode Matakuliah Minimal 3 Karakter'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus Diisi',
            'min_length' => 'Nama Matakuliah Minimal 3 Karakter'
        ]);

        $this->form_validation->set_rules('sks', 'SKS Wajib Dipilih', 'required', [
            'required' => 'SKS Wajib Dipilih Harus Diisi'
        ]);

        if($this->form_validation->run() == false){
            $this->load->view('view-form-matakuliah');
        }else{
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('view-data-matakuliah', $data);
        }

    }
}
