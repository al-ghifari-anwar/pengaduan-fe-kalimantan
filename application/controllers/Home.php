<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Menu');
        $this->load->view('Home/Index');
        $this->load->view('Footer');
    }

    public function profil()
    {
        $this->load->view('Header');
        $this->load->view('Menu');
        $this->load->view('Home/Profil');
        $this->load->view('Footer');
    }

    public function tentang()
    {
        $this->load->view('Header');
        $this->load->view('Menu');
        $this->load->view('Home/Tentang');
        $this->load->view('Footer');
    }
}
