<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function index()
    {

        $this->form_validation->set_rules('username', 'Alamat Email', 'required|trim', [
            'required' => 'Email Harus diisi!!!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'password Harus diisi!!!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'SL - LOGIN';
            $data['user'] = '';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->ModelAdmin->cekData(['username' => $username])->row_array();
        
        if ($user) {
            if ($user['username'] == 'admin') {
                if ($password . $user['password']) {
                    $data = [
                        'username' => $user['username']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['username'] == 'admin') {
                        redirect('dashboard');
                    } 
                }    else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">User not activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Email not registered!</div>');
            redirect('auth');
        }
    }
    public function siswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Lengkap tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nisn', 'Nisn', 'required|trim|numeric|is_unique[siswa.nisn]', [
            'numeric' => 'hanya boleh di isi angka',
            'required' => 'Nisn tidak boleh kosong',
            'is_unique' => 'Nisn sudah di gunakan'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim|numeric', [
            'required' => 'Kelas tidak boleh kosong',
            'numeric' => 'hanya boleh di isi angka',
        ]);

        if($this->form_validation->run() == false) {
            $data['title'] = 'SISWA';
            $this->load->view('auth/form', $data);


        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'nisn' => $this->input->post('nisn', true),
                'kelas' => $this->input->post('kelas', true),
                'jurusan' => $this->input->post('jurusan', true),
                'calon' => $this->input->post('calon', true),
            ];
            $this->ModelAdmin->simpanData($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" 
            role="alert">DATA PEMILIH BERHASIL DI SIMPAN !</div>');

            redirect('auth/siswa');
        }
    }   
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" 
            role="alert">Your account has been logout !</div>');
        redirect('mainpage');
    } 

}
