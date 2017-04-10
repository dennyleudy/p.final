<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inicio');
	}
	function lo_datos(){
		$this->load->view('lo_datos');
	}
	function login(){
		$this->load->view('login/login');
	}
}
