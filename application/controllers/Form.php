<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Form Input";
        $this->load->view('dilemas_header',$data);
        $this->load->view('dilemas_index',$data);
        $this->load->view('dilemas_footer',$data);
    }
    public function about()
    {
    $data['judul'] = "Halaman About";
    $this->load->view('dilemas_header', $data);
    $this->load->view('dilemas_about', $data);
    $this->load->view('dilemas_footer', $data);
    }
}