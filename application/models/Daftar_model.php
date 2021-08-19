<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    private $table = 'daftar';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'email',  //samakan dengan atribute name pada tags input
                'label' => 'Email',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nik',  //samakan dengan atribute name pada tags input
                'label' => 'NIK',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tempat_lahir',  //samakan dengan atribute name pada tags input
                'label' => 'Tempat lahir',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tanggal_lahir',  //samakan dengan atribute name pada tags input
                'label' => 'Tanggal lahir',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'usia',  //samakan dengan atribute name pada tags input
                'label' => 'Usia',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'alamat_ktp',  //samakan dengan atribute name pada tags input
                'label' => 'Alamat KTP',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'alamat_tinggal',  //samakan dengan atribute name pada tags input
                'label' => 'Alamat Tinggal',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'agama',  //samakan dengan atribute name pada tags input
                'label' => 'Agama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'jk',  //samakan dengan atribute name pada tags input
                'label' => 'Jenis Kelamin',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'bb',  //samakan dengan atribute name pada tags input
                'label' => 'Berat Badan',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tb',  //samakan dengan atribute name pada tags input
                'label' => 'Tinggi Badan',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'pendidikan',  //samakan dengan atribute name pada tags input
                'label' => 'Pendidikan',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'jurusan',  //samakan dengan atribute name pada tags input
                'label' => 'Jurusan',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'telp',  //samakan dengan atribute name pada tags input
                'label' => 'Nomer telp',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'ref',  //samakan dengan atribute name pada tags input
                'label' => 'Referensi',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ]

        ];
    }

    //menampilkan data berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from where id='$id'
    }

    //menampilkan semua data
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from order by id desc
    }

    //menyimpan data
    public function save()
    {
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
        return $this->db->insert($this->table, $data);
    }

    //edit data
    public function update()
    {
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

        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data
    public function deletee($id)
    {
        //return $this->db->delete($this->table, array("id" => $id));

        $hasil = $this->db->query("DELETE FROM daftar WHERE id='$id'");
        return $hasil;
    }

    public function delette($id, $img_ktp, $img_selfie)
    {
        $this->db->where('id', $id);

        unlink("assets/img/daftar" . $img_ktp);
        unlink("assets/img/daftar" . $img_selfie);

        $this->db->delete('daftar', array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db->query("delete from daftar where id='$id'");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
}
