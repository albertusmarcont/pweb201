<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Daftar_Resep/list');
	}

  public function ayambumbubali()
	{
		$this->load->view('Daftar_Resep/ayambumbubali');
	}

  public function brenebon()
	{
		$this->load->view('Daftar_Resep/brenebon');
	}

  public function cotomakassar()
	{
		$this->load->view('Daftar_Resep/cotomakassar');
	}

  public function kapurung()
	{
		$this->load->view('Daftar_Resep/kapurung');
	}

  public function konro()
	{
		$this->load->view('Daftar_Resep/konro');
	}

  public function lawar()
	{
		$this->load->view('Daftar_Resep/lawar');
	}

  public function pallubasa()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function pempekpalembang()
	{
		$this->load->view('Daftar_Resep/pempekpalembang');
	}

  public function satelilit()
	{
		$this->load->view('Daftar_Resep/satelilit');
	}

  public function songkolo()
	{
		$this->load->view('Daftar_Resep/songkolo');
	}

  public function sopsaudara()
	{
		$this->load->view('Daftar_Resep/sopsaudara');
	}

}
