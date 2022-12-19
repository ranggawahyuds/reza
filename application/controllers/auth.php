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
            $this->load->view('templates/login', $data);
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
                        redirect('auth/abs');
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
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" 
            role="alert">Your account has been logout !</div>');
        redirect('auth');
    } 
    public function abs()
    {
        $this->load->view('tampil');
    }
}
