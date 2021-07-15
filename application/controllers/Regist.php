<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // manggil konstruktor dari CI_Controller
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/front_nav');
        $this->load->view('regist/index');
        $this->load->view('templates/front_footer');
    }

    public function regist()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/front_nav');
            $this->load->view('regist/index');
            $this->load->view('templates/front_footer');
        } else {
            $email = $this->input->post('email', false);

            // cek jika ada gambar yang akan diupload

            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '20488';
            $config['upload_path'] = './assets/img/daftar/';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!empty($_FILES['img_ktp'])) {
                $this->upload->do_upload('img_ktp');
                $data1 = $this->upload->data();
                $img_ktp =  $data1['file_name'];
            }

            if (!empty($_FILES['img_selfie'])) {
                $this->upload->do_upload('img_selfie');
                $data2 = $this->upload->data();
                $img_selfie =  $data2['file_name'];
            }


            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $email,
                'nik' => $this->input->post('nik', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'usia' => $this->input->post('usia', true),
                'alamat_ktp' => $this->input->post('alamat_ktp', true),
                'alamat_tinggal' => $this->input->post('alamat_tinggal', true),
                'agama' => $this->input->post('agama', true),
                'jk' => $this->input->post('jk', true),
                'bb' => $this->input->post('bb', true),
                'tb' => $this->input->post('tb', true),
                'pendidikan' => $this->input->post('pendidikan', true),
                'jurusan' => $this->input->post('jurusan', true),
                'telp' => $this->input->post('telp', true),
                'img_ktp' => $img_ktp,
                'img_selfie' => $img_selfie,
                'ref' => $this->input->post('ref', true),
                // 'image' => 'default.jpg',
                'date_created' => time()
            ];


            //$this->db->insert('daftar', $data);
            $insert = $this->db->insert('daftar', $data);
            if ($insert) {
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan hubungi kontak center.");window.location.href="' . base_url('/regist/regist') . '";</script>';
            }
            //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Contact administrator</div>');
            //     redirect('/regist');
        }
    }
}
