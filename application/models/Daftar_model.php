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
            ]

        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
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

    //edit data mahasiswa
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
