<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_connect extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index/header');
		$this->load->view('index/body1');
		$this->load->view('index/body2');
		$this->load->view('index/body3');
		$this->load->view('index/body4');
		$this->load->view('index/body5');
		$this->load->view('index/footer');
		
	}
	public function about()
	{
		$this->load->view('index/header');
		$this->load->view('index/about');
			$this->load->view('index/footer');
	
		
	}
	public function contact()
	{
				$this->form_validation->set_rules('name','Full name','required');
				$this->form_validation->set_rules('email','email','required|valid_email');
				$this->form_validation->set_rules('phone','phone number','required|max_length[10]|min_length[10]|numeric');
				$this->form_validation->set_rules('message','message','required|max_length[100]|min_length[10]');
		
				if($this->form_validation->run()==TRUE)
				{
					$name=$this->input->post('name');
					$email=$this->input->post('email');
					$phone=$this->input->post('phone');
					$message=$this->input->post('message');
					$this->bconnect_model->feedback($name,$email,$phone,$message);
				}
	
		$this->load->view('index/contact');
	
		
	}
	
	public function registration()
	{
				$this->form_validation->set_rules('name','Full name','required');
				$this->form_validation->set_rules('dob','Date of birth','required');
				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('phone','Mobile','required|max_length[10]|min_length[10]|numeric');
				$this->form_validation->set_rules('password','Password','required|min_length[8]|alpha_numeric');
				$this->form_validation->set_rules('re_password','Confirm Password','required|min_length[8]|alpha_numeric|matches[password]');
				
				if($this->form_validation->run()==TRUE)
				{
					$name=$this->input->post('name');
					$dob=$this->input->post('dob');
					$email=$this->input->post('email');
					$phone=$this->input->post('phone');
					$password=$this->input->post('password');
					$this->bconnect_model->reg($name,$dob,$email,$phone,$password);
					
				}
		$this->load->view('reg/reg');
	}
	
	
	public function login()
		
	{
		$error_var=$this->input->get('error');
		$error="invailed username/password";
		$data=array('error'=>$error , 'error_var'=>$error_var);
		$this->form_validation->set_rules('username','User name','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==TRUE)
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->bconnect_model->login($username,$password);
			
		}
		$this->load->view('login/login',$data);
	}

		public function admin()
	{
			$role=$this->session->userdata('email');
		$fun="admin";
			$data=array('role'=> $role,'fun' => $fun);
			
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}
		public function admin_add_dept()
	{
			$role=$this->session->userdata('email');
			$fun="admin_add_dept";
			$data=array('role'=> $role,'fun' => $fun);
				$this->form_validation->set_rules('deptname','Full name','required');
				$this->form_validation->set_rules('Email','Email','required|valid_email');
				$this->form_validation->set_rules('password','password','required');
			
		
				if($this->form_validation->run()==TRUE)
				{
					$dept_name=$this->input->post('deptname');
					$email=$this->input->post('Email');
					$password=$this->input->post('password');
					$config['allowed_types']='jpg|png';
					$config['upload_path']='./assets/deptlogo/';
					$config['max_size']='50000';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('logo'))
					{
			//print_r($this->upload->data());
						$pic=$this->upload->data('file_name');
						$this->bconnect_model->add_dept($dept_name,$email,$password,$pic);
					}
					else
					{
						print_r($this->upload->display_errors());
					}
					
					
				}
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/adddept');
		$this->load->view('admin/footer');
	}

	public function admin_user_view()
	{
		$role=$this->session->userdata('email');
		$fun="admin_user_view";
			$data=array('role'=> $role,'fun' => $fun);
		$result['data']=$this->bconnect_model->user_view();
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/viewuser',$result);
		$this->load->view('admin/footer');
		
	}
	
	public function admin_dept_view()
	{
		$role=$this->session->userdata('email');
		$fun="admin_dept_view";
			$data=array('role'=> $role,'fun' => $fun);
		$result['data']=$this->bconnect_model->dept_view();
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/viewdept',$result);
		$this->load->view('admin/footer');
		
	}
	public function user_delete()
	{
		$id=$this->input->get('id');
		$this->bconnect_model->delete_user($id);
	
	}
	
	public function dept_delete()
	{
		$id=$this->input->get('id');
		$email=$this->input->get('Email');
		$this->bconnect_model->delete_dept($id,$email);
	
	}
	
	public function dept_edit()
		
	{
		$role=$this->session->userdata('email');
		$fun="dept_edit";
			$data=array('role'=> $role,'fun' => $fun);
		
				$id=$this->input->get('id');
				$edit['data']=$this->bconnect_model->edit_dept($id);
				$this->form_validation->set_rules('deptname','department name','required');
				$this->form_validation->set_rules('Email','Email','required|valid_email');
				if($this->form_validation->run()==TRUE)
				{
					$dept_name=$this->input->post('deptname');
					$email=$this->input->post('Email');
					$this->bconnect_model->update_user($dept_name,$email,$id);
					
		
		
				}
		$id=$this->input->get('id');
		$edit['data']=$this->bconnect_model->edit_dept($id);
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/editdept',$edit);
		$this->load->view('admin/footer');
	
	}
	public function feedback()
	{
		$role=$this->session->userdata('email');
		$fun="feedback";
			$data=array('role'=> $role,'fun' => $fun);
		
		$result['data']=$this->bconnect_model->feedback_view();
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/feedback',$result);
		$this->load->view('admin/footer');
	}
	public function old_feedback()
	{
		
		$role=$this->session->userdata('email');
		$fun="old_feedback";
			$data=array('role'=> $role,'fun' => $fun);
		$result['data']=$this->bconnect_model->old_feedback_view();
		$this->load->view('admin/header');
		$this->load->view('admin/slider',$data);
		$this->load->view('admin/old_feedback',$result);
		$this->load->view('admin/footer');
	}
	
	public function feedback_delete()
	{
		$id=$this->input->get('id');
		$this->bconnect_model->feedback_delete($id);
	
	}
	public function feedback_update()
	{
		$id=$this->input->get('id');
		$this->bconnect_model->feedback_update($id);
	
	}
	
	
	
}
