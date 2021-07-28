<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // manggil konstruktor dari CI_Controller
    }

    public function index()
    {
        $data['title'] = 'Gallery';

        $this->load->view('templates/front_nav');
        $this->load->view('home/gallery', $data);
        $this->load->view('templates/front_footer');
    }
}
