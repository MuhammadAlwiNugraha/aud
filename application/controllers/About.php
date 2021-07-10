<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // manggil konstruktor dari CI_Controller
        $this->load->model("Menu_model");
    }

    public function index()
    {
        $data['title'] = 'My Profile';

        $this->load->view('templates/front_nav');
        $this->load->view('home/about');
        $this->load->view('templates/front_footer');
    }
}
