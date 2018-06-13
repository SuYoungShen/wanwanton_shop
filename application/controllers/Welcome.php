<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 public function __construct(){
		 parent::__construct();
		 $this->load->model(array('product_model'));
	 }
	public function index()
	{
		$start = "4";
		$end = "5";
		$view_data['ranking_pics'] = $this->product_model->get_limit("product_m", $end, $start);//排行

		$table = "product_m as p_m, product_img as p_i";
		$where = "p_m.prod_no=p_i.prod_no";
		$view_data['ranking'] = $this->product_model->get_where_limit($table, $where, $end, $start);//排行照片
		$this->load->view('index', $view_data);
	}
}
