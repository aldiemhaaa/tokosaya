<?php 

class Menu extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function get_menu()
    {
        return $this->db->get('menu');
    }
}