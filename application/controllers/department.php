<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class department extends CI_Controller {

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
			public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('bconnect_model');
		$this->load->model('department_model');
		$this->load->library('form_validation');
	}
	public function welcome()
	{	
		$role=$this->session->userdata('email');
		$fun="welcome";
			
		$dept=$this->session->userdata('email');
		$dept_name=$this->session->userdata('dept_name');
		$data1=array('email'=>$dept,'dept_name'=>$dept_name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->department_model->dept_view($dept);
	
		$this->load->view('department/header');
		$this->load->view('department/slider',$data1);
		$this->load->view('department/home',$result);
		$this->load->view('department/footer');
		
	}
	public function generate_bill()
	{
		$role=$this->session->userdata('email');
		$fun="generate_bill";
			
		
						
		$dept=$this->session->userdata('email');
		$dept_name=$this->session->userdata('dept_name');
		$data1=array('email'=>$dept,'dept_name'=>$dept_name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->department_model->get_user($dept);
	
		
				$this->form_validation->set_rules('uid','key id','required');
				
				$this->form_validation->set_rules('ldate','last date','required');
				$this->form_validation->set_rules('amount','amount','required');
				if($this->form_validation->run()==TRUE)
					{
					$id=$this->input->post('uid');
					
					$accno=$this->input->post('ldate');
					$cardno=$this->input->post('amount');
					$this->department_model->bill_add($id,$accno,$cardno,$dept);
					}
	
		$this->load->view('department/header');
		$this->load->view('department/slider',$data1);
		$this->load->view('department/generate_bill',$result);
		$this->load->view('department/footer');
		
		
	}
	public function view_bill()
	{
		$role=$this->session->userdata('email');
		$fun="view_bill";
			
		$dept=$this->session->userdata('email');
		$dept_name=$this->session->userdata('dept_name');
		$data1=array('email'=>$dept,'dept_name'=>$dept_name,'role'=> $role,'fun' => $fun);
		$result['data2']=$this->department_model->bill_view($dept);
	
		$this->load->view('department/header');
		$this->load->view('department/slider',$data1);
		$this->load->view('department/view_bill',$result);
		$this->load->view('department/footer');
		
		
	}
}
?>