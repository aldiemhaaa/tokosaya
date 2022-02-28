<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MProduk');
	}

	public function index()
	{
        $this->load->view('produk/index');
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
