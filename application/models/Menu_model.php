<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
        return $this->db->error();
    }


    public function ubahpendaftar()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
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
            'ref' => $this->input->post('ref', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('daftar', $data);

        // UPDATE user SET name,alamat,email,nohp WHERE email = email
    }
}
