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
            $upload_image = $_FILES['image']['nama'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/daftar/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['daftar']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/daftar/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
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
                'img_ktp' => $this->input->post('img_ktp', true),
                'img_selfie' => $this->input->post('img_selfie', true),
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
