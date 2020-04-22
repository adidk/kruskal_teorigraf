<?php
defined('BASEPATH') or exit('No direct script access allowed');

class algoritmakruskal extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Algoritma Kruskal";


        $this->load->view('templates/header', $data);
        $this->load->view('algoritmakruskal');
        $this->load->view('templates/footer');
    }
}
