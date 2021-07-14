<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("Menu_model");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function regist()
    {
        $data['title'] = 'Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pendaftar');
            $this->load->view('templates/footer', $data);
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
                'img_ktp' => $img_ktp,
                'img_selfie' => $img_selfie,
                'ref' => $this->input->post('ref', true),
                // 'image' => 'default.jpg',
                'date_created' => time()
            ];


            //$this->db->insert('daftar', $data);
            $insert = $this->db->insert('daftar', $data);
            if ($insert) {
                echo '<script>alert("Sukses! Data Berhasil dimasukkan");window.location.href="' . base_url('/admin/pendaftar') . '";</script>';
            } else {
                echo '<script>alert("Gagal! Data Gagal dimasukkan");window.location.href="' . base_url('/admin/pendaftar') . '";</script>';
            }
            //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Contact administrator</div>');
            //     redirect('/regist');
        }
    }

    public function pendaftar()
    {
        $data['title'] = 'List';
        //$data['daftar'] = $this->Menu_model->ubahpendaftar();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar'] = $this->Menu_model->get_data('daftar')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pendaftar', $data);
        $this->load->view('templates/footer', $data);
    }

    function edit_pendaftar($id)
    {
        //$datas['title'] = 'Edit Pendaftar';
        //$data['daftar'] = $this->Menu_model->ubahpendaftar();
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['daftar'] = $this->db->query("select * from daftar where id='$id'")->result();

        $this->load->view('templates/header', $datas);
        $this->load->view('templates/sidebar', $datas);
        $this->load->view('templates/topbar', $datas);
        $this->load->view('admin/edit_pendaftar', $data);
        $this->load->view('templates/footer', $datas);
    }

    function update_pendaftar()
    {
        $datas['title'] = 'Edit Pendaftar';
        //$data['daftar'] = $this->Menu_model->ubahpendaftar();
        $datas['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $nik = $this->input->post('nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $taggal_lahir = $this->input->post('tanggal_lahir');
        $usia = $this->input->post('usia');
        $alamat_ktp = $this->input->post('alamat_ktp');
        $alamat_tinggal = $this->input->post('alamat_tinggal');
        $agama = $this->input->post('agama');
        $jk = $this->input->post('jk');
        $bb = $this->input->post('bb');
        $tb = $this->input->post('tb');
        $pdk = $this->input->post('pendidikan');
        $telp = $this->input->post('telp');
        $ref = $this->input->post('ref');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('alamat_ktp', 'Alamat KTP', 'required');
        $this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('bb', 'Berat Badan', 'required');
        $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('telp', 'No. Telepon', 'required');
        $this->form_validation->set_rules('ref', 'Referensi', 'required');

        if ($this->form_validation->run() != false) {
            $where = array('id' => $id);
            $data = array(
                'nama' => $nama,
                'email' => $email,
                'nik' => $nik,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $taggal_lahir,
                'usia' => $usia,
                'alamat_ktp' => $alamat_ktp,
                'alamat_ktp' => $alamat_tinggal,
                'agama' => $agama,
                'jk' => $jk,
                'bb' => $bb,
                'tb' => $tb,
                'pendidikan' => $pdk,
                'telp' => $telp,
                'ref' => $ref,
            );

            $this->Menu_model->update_data('daftar', $data, $where);
            redirect(base_url() . 'admin/pendaftar');
        } else {
            $where = array('id' => $id);
            $data['daftar'] = $this->db->query("select * from daftar where id='$id'")->result();
            $this->load->view('templates/header', $datas);
            $this->load->view('admin/edit_pendaftar', $data);
            $this->load->view('templates/sidebar', $datas);
            $this->load->view('templates/footer', $datas);
        }
    }
}
