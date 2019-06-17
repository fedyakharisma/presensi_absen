<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model('Mtambah_kategori');
	// }

	
	public function index(){

	$this->load->library('ciqrcode');

	$this->load->helper('url');

	date_default_timezone_set('Asia/Jakarta');
    
    if (date('Y-m-d H:i:s')>date('Y-m-d', mktime( 8, 0, 0, date('n'), date('j'), date('y')))) {
    $qr['data'] = date("Y-m-d H:i:s");
    
	var_dump($qr['data']);
	$qr['level'] = 'H';
	$qr['size'] = 5;
	$qr['savename'] = FCPATH."gambarqr/"."qpr.png";
	$qrimage=$this->ciqrcode->generate($qr);
	$this->load->view("Vqr",$qrimage);
	// redirect('Qr','refresh');

    }
	


	



	 }
}	
	

