<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("Menu_model");
        $this->load->model("Daftar_model"); //load model mahasiswa
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["title"] = "List Data ";
        $data["data_pendaftar"] = $this->Daftar_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pendaftar', $data);
        $this->load->view('templates/footer');
    }

    //method add digunakan untuk menampilkan form tambah data
    public function add()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $utas = $this->Daftar_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($utas->rules()); //menerapkan rules validasi pada utas_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada utas_model
        if ($validation->run()) {
            $utas->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("admin/pendaftar");
        }
        $data["title"] = "Tambah Data";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add', $data);
        $this->load->view('templates/footer', $data);
    }

    public function edit($id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!isset($id)) redirect('admin/pendaftar');

        $utas = $this->Daftar_model;
        $validation = $this->form_validation;
        $validation->set_rules($utas->rules());

        if ($validation->run()) {
            $utas->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("admin/pendaftar");
        }
        $data["title"] = "Edit Data ";
        $data["data_pendaftar"] = $utas->getById($id);
        if (!$data["data_pendaftar"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $this->load->library('upload');
        $this->upload->initialize($this->set_upload_options());

        $data = array(
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "nik" => $this->input->post('nik'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "tanggal_lahir" => $this->input->post('tanggal_lahir'),
            "usia" => $this->input->post('usia'),
            "alamat_ktp" => $this->input->post('alamat_ktp'),
            "alamat_tinggal" => $this->input->post('alamat_tinggal'),
            "agama" => $this->input->post('agama'),
            "jk" => $this->input->post('jk'),
            "bb" => $this->input->post('bb'),
            "tb" => $this->input->post('tb'),
            "pendidikan" => $this->input->post('pendidikan'),
            "jurusan" => $this->input->post('jurusan'),
            "telp" => $this->input->post('telp'),

            "ref" => $this->input->post('ref')
        );

        if ($this->upload->do_upload('img_ktp')) {
            $dataInfo = $this->upload->data();
            $data['img_ktp'] = $dataInfo['file_name'];
        }

        if ($this->upload->do_upload('img_selfie')) {
            $dataInfo = $this->upload->data();
            $data['img_selfie'] = $dataInfo['file_name'];
        }


        $data['nama'] = $this->input->post('nama');


        $this->db->where('id', $id);
        $this->db->update('daftar', $data);


        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">You are Successfully updated!</div>');
        redirect('index.php/admin/display_product_list');
    }




    function delete()
    {
        // $this->Daftar_model->delete($id);
        // redirect('admin/pendaftar');

        $id = $this->input->post('id');
        $this->Daftar_model->delete($id);
        redirect('admin/pendaftar');
    }
}
