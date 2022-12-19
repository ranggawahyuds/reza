<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
		
	}
	public function admin()
	{
		$data['title'] = 'Profile';
		$data['profile'] = $this->ModelAdmin->cekData()->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('data_admin', $data);
		$this->load->view('templates/footer');
	}
	public function siswa()
	{
		$data['title'] = 'Data';
		$data['siswa'] = $this->ModelAdmin->getSiswa()->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('data_siswa',$data);
		$this->load->view('templates/footer');
	}
	public function ubahData()
    {
        $data['title'] = 'Ubah Data';
        $data['ubah'] = $this->ModelAdmin->siswaWhere(['nisn' => $this->uri->segment(3)])->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Lengkap tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nisn', 'Nisn', 'required|trim|numeric', [
            'numeric' => 'hanya boleh di isi angka',
            'required' => 'Nisn tidak boleh kosong',
            
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim|numeric', [
            'required' => 'Kelas tidak boleh kosong',
            'numeric' => 'hanya boleh di isi angka',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('ubah_data', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nisn' => $this->input->post('nisn', true),
                'nama' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'jurusan' => $this->input->post('jurusan', true),
				'calon' => $this->input->post('calon', true)
            ];

            $this->ModelAdmin->ubahData($data, ['nisn' => $this->input->post('nisn')]);
            redirect('dashboard/siswa');
        }
    }

    public function hapusData()
    {
        $where = ['nisn' => $this->uri->segment(3)];
        $this->ModelAdmin->hapusData($where);
        redirect('dashboard/siswa');
    }
}
