<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
		if($this->input->post('username') && $this->input->post('password')){
			$x = $this->Auth->cek_auth();

			// pembuatan menu dan auth
			$menu = $this->Auth->menu($x[0]['role']);
			// var_dump($menu);die();
			if(count($x) && count($menu)){
				$array= [];
				foreach($menu as $row){
					$sub_menu = $this->Auth->submenu($row['id']);
					// var_dump($sub_menu);die();
					$submenu = [];
					foreach($sub_menu as $sub){
						array_push($submenu,[
							'id'=>$sub['id'],
							'title'=>$sub['title'],
							'parent'=>$sub['parent'],
							'parent_id'=>$sub['parent_id'],
							'url'=>$sub['url'],
						]);
					}
					array_push(
						$array,[
							'id'=>$row['id'],
							'title'=>$row['title'],
							'parent'=>$row['parent'],
							'parent_id'=>$row['parent_id'],
							'icon'=>$row['icon'],
							'url'=>$row['url'],
							'submenu'=>$submenu
						]
						);
				}

				$session = array(
					'nama'          => $x[0]['nama'],
					'logged_in'     => TRUE,
					'role'			=> $x[0]['role'],
					'menu'			=> $array
					);
				$this->session->set_userdata($session);
				redirect('home');
			}
		}
        $this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function create()
	{
		echo 'create';
	}

	public function update()
	{
		echo 'update';
	}

	public function delete()
	{
		echo 'delete';
	}
}
