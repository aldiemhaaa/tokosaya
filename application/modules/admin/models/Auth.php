
<?php 

class Auth extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function cek_login()
    {
        if(!$this->session->logged_in){
            return false;
        }
        return true;
    }

    function cek_auth()
    {
        return $this->db->select('*')
        ->from('user')
        ->join('role','role.id = user.role')
        ->where('username',$this->input->post('username'))
        ->where('password',md5($this->input->post('password')))
        ->get()
        ->result_array();
        
    }
    function menu($role)
    {
        return $this->db->select('menu.id,menu.title,menu.parent,menu.parent_id,menu.url,menu.icon')
        ->from('role_menu')
        ->join('menu','menu.id= role_menu.menu_id')
        ->where('role_menu.role_id',$role)
        ->where('menu.parent','1')
        ->order_by('position','asc')
        ->get()
        ->result_array();
    }

    function submenu($parent_id)
    {
        return $this->db->select('menu.id,menu.title,menu.parent,menu.parent_id,menu.url,menu.icon')
        ->from('menu')
        ->where('menu.parent_id',$parent_id)
        ->get()
        ->result_array();
    }
}