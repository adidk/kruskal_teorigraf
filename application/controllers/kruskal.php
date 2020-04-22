<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kruskal extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Hitung Matriks";

        $this->load->view('templates/header', $data);
        $this->load->view('kruskal');
        $this->load->view('templates/footer');
    }

    public function hitung()
    {
        $this->load->helper('kruskal_helper');

        $data['judul'] = "Hitung Matriks";

        $this->load->view('templates/header', $data);
        $this->load->view('hasilkruskal');
    }
}
