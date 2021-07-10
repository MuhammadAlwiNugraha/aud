<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // manggil konstruktor dari CI_Controller
        $this->load->model("Menu_model");
    }

    public function index()
    {
        $this->load->view('templates/front_nav');
        $this->load->view('regist/index');
        $this->load->view('templates/front_footer');
    }

    public function regist()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'LPK Regist';
            $this->load->view('templates/front_nav', $data);
            $this->load->view('regist/index');
            $this->load->view('templates/front_footer');
        } else {
            $email = $this->input->post('email', false);
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
            redirect('auth');
        }
    }
}
