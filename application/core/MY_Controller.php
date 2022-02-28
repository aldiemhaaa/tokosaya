<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('admin/Menu');
        $this->load->model('admin/Auth');
        $author = $this->Auth->cek_login();
        if(!$author)
        {
            redirect('admin/login');
        }
    }
}