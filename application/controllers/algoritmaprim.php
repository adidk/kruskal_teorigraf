<?php
defined('BASEPATH') or exit('No direct script access allowed');

class algoritmaprim extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Algoritma Prim";


        $this->load->view('templates/header', $data);
        $this->load->view('algoritmaprim');
        $this->load->view('templates/footer');
    }
}
