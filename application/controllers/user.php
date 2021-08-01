<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
		$this->load->model('user_model');
		$this->load->model('department_model');
		$this->load->library('form_validation');
	}
	public function welcome()
	{	
		
		$role=$this->session->userdata('email');
		$fun="welcome";
	
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/home',$result);
		$this->load->view('admin/footer');
		
	}
	public function profile()
	{
		$role=$this->session->userdata('email');
		$fun="profile";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/pro',$result);
		$this->load->view('admin/footer');
	}
	public function edit_profile()
	{
		$role=$this->session->userdata('email');
		$fun="edit_profile";
		        
		
				$this->form_validation->set_rules('name','Name','required');
				$this->form_validation->set_rules('dob','Date of birth','required');
				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('phone','Mobile','required|max_length[10]|min_length[10]|numeric');
				$this->form_validation->set_rules('password','Password','required|min_length[8]|alpha_numeric');
			if($this->form_validation->run()==TRUE)
					{
					$id=$this->input->post('id');
					$name=$this->input->post('name');
					$dob=$this->input->post('dob');
					$email=$this->input->post('email');
					$phone=$this->input->post('phone');
					$password=$this->input->post('password');
					$this->user_model->reg($id,$name,$dob,$email,$phone,$password);
		
					}
				
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/edit_profile',$result);
		$this->load->view('admin/footer');
		
		
		
	}
	public function add_card()
	{
		$role=$this->session->userdata('email');
		$fun="add_card";
		
					$this->form_validation->set_rules('accno','Upi Id','required');
				$this->form_validation->set_rules('cardno','Card Number','required|max_length[12]|min_length[12]|numeric');
				$this->form_validation->set_rules('cvv','CVV','required|max_length[3]|min_length[3]|numeric');
				$this->form_validation->set_rules('exp','EXP Date','required');
				$this->form_validation->set_rules('upi','UPI','required|max_length[6]|min_length[6]|numeric');
			if($this->form_validation->run()==TRUE)
					{
					$id=$this->input->post('id');
					$name=$this->input->post('name');
					$accno=$this->input->post('accno');
					$cardno=$this->input->post('cardno');
					$cvv=$this->input->post('cvv');
					$exp=$this->input->post('exp');
					$upi=$this->input->post('upi');
					$this->user_model->addcard($id,$name,$accno,$cardno,$cvv,$exp,$upi);
		
					}
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/add_card',$result);
		$this->load->view('admin/footer');
	}
	public function view_card()
	{
		$role=$this->session->userdata('email');
		$fun="view_card";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_loginview($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/card_viewnew',$result);
		$this->load->view('admin/footer');
	}
	 
	public function card_delete()
	{
		$id=$this->input->get('id');
		$this->user_model->delete_card($id);
	
	}
		public function add_dept()
	{	
			
		$role=$this->session->userdata('email');
		$fun="add_dept";
			
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
	    
			$this->form_validation->set_rules('deptid','Account Number','required');
			$this->form_validation->set_rules('keyid','Card Number','required');
				if($this->form_validation->run()==TRUE)
			{
				$id=$this->input->post('id');
				$deptid=$this->input->post('deptid');	
				$keyid=$this->input->post('keyid');
				$this->user_model->adddept($id,$deptid,$keyid);
			}
					
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/add_dept',$result);
		$this->load->view('admin/footer');
		
	}
	public function dept_view()
	{
		$role=$this->session->userdata('email');
		$fun="dept_view";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_deptview($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/dept_view',$result);
		$this->load->view('admin/footer');
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		redirect('Bill_connect/index');
	}
		
	public function dept_delete()
	{
		$id=$this->input->get('id');
		$this->user_model->delete_dept($id);
	
	}
	public function bill_payment()
	{
		$role=$this->session->userdata('email');
		$fun="bill_payment";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->bill_pay($user);
		
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/bill_payment',$result);
		$this->load->view('admin/footer');
		
	}
	public function bill_view()
	{
		$role=$this->session->userdata('email');
		$fun="bill_view";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
			$result['data2']=$this->user_model->paid_bill($user);
		
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/paid_bill',$result);
		$this->load->view('admin/footer');
		
	}
	public function e_book()
	{
		$role=$this->session->userdata('email');
		$fun="e_book";
		
				$this->form_validation->set_rules('title','Title','required');
				$this->form_validation->set_rules('date','Date','required');
				$this->form_validation->set_rules('amount','Amount','required');
		
			if($this->form_validation->run()==TRUE)
					{
					$id=$this->input->post('id');
					$title=$this->input->post('title');
					$date=$this->input->post('date');
					$amount=$this->input->post('amount');
				
					$this->user_model->add_ebook($id,$title,$date,$amount);
		
					}
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->user_view($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/e_book',$result);
		$this->load->view('admin/footer');
	}
	public function e_book_view()
	{
		$role=$this->session->userdata('email');
		$fun="e_book_view";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data']=$this->user_model->ebook_viewlist($user);
	
		$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/ebook_viewlist',$result);
		$this->load->view('admin/footer');
	}
	public function e_book_barchart()
	{
		$role=$this->session->userdata('email');
		$fun="e_book_barchart";
		
		$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
		$data=array('email'=>$user,'name'=>$name,'role'=> $role,'fun' => $fun);
		$result['data1']=$this->user_model->ebook_month($user);
		
		
		
					
					$id=$this->input->post('id');
					$stdate=$this->input->post('stdate');
					$enddate=$this->input->post('enddate');
				
					$result['data']=$this->user_model->monthly_list($id,$stdate,$enddate);
		
					
			$this->load->view('user/header');
		$this->load->view('user/slider',$data);
		$this->load->view('user/ebook_view',$result);
		$this->load->view('admin/footer');
		
	
		
	}
	public function bill_pay()
	{
		$bill_id = $this->input->post('bill_id');
		$amt = 0;
		for ($i=0; $i < sizeof($bill_id); $i++) 
    	{
    		
    		//$this->db->query("UPDATE `bill_connect`.`bill` SET `st` = '2' WHERE `bill`.`bill_id` =$bill_id[$i]");
    		$query = $this->db->query("select amount from `bill_connect`.`bill` WHERE `bill`.`bill_id` =$bill_id[$i]");
    		$row = $query->row();
    		$a = $row->amount;
    		$amt =$amt+$a;
    		//$data = array('bill_id'.$i=>$bill_id[$i],'amount'=>$amt);
    		$this->session->set_userdata(array('bill_id'.$i=>$bill_id[$i],'amount'=>$amt,'count'=>$i));
    	}
    	
    	redirect('user/payment');
	}
	
	public function payment()
	{
			$user=$this->session->userdata('email');
		$name=$this->session->userdata('name');
//		$data1=array('email'=>$user,'name'=>$name);
		
		/* $count =$this->session->userdata('count');
		echo $count;
		for ($i=0; $i <= $count ; $i++) { 
			
			echo $this->session->userdata('bill_id'.$i); 
			 
		} */
		$error = '';
		if($this->input->get('error')){
			$er = $this->input->get('error');
			if($er == 1)
			{
				$error = 'Invalid card details';
			}
			elseif($er == 2){
				$error = 'Insufficiant Balance';
			}
		}
		
		$data= array('amt'=>$this->session->userdata('amount'),'error'=>$error);
		
		$result['data1']=$this->user_model->card_select($user);
		
		$this->load->view('user/payment_met',$data,$result);

	}
	public function upi_payment()
	{
		/* $count =$this->session->userdata('count');
		echo $count;
		for ($i=0; $i <= $count ; $i++) { 
			
			echo $this->session->userdata('bill_id'.$i); 
			 
		} */
		
		$error = '';
		if($this->input->get('error')){
			$er = $this->input->get('error');
			if($er == 1)
			{
				$error = 'Invalid upi';
			}
			elseif($er == 2){
				$error = 'Insufficiant Balance';
			}
		}
		$data=array('amt'=>$this->session->userdata('amount'),'error'=>$error);
		$this->load->view('user/upi_payment_met',$data);
	}
	public function card_payment()
	{
		$name = $this->input->post('name');
		$crd_no = $this->input->post('crd_no');
		$date = $this->input->post('date');
		$cvv = $this->input->post('cvv');
		$amt = $this->input->post('amt');
		$this->user_model->card_payment($name,$crd_no,$date,$cvv,$amt);
	}
	public function upi_payment_process()
	{
		
		$upi = $this->input->post('upi');
		$amt = $this->input->post('amt');
		$this->user_model->upi_payment($upi,$amt);
	}
	public function invoice()
	{
		$bill_id = $this->session->userdata('bill_id0');
		$result['data'] = $this->user_model->invoice($bill_id);
		$result['data1'] = $this->user_model->invoice_usr($bill_id);
		$this->load->view('user/invoice',$result);
	}
	public function invoice_print()
	{
		$bill_id = $this->session->userdata('bill_id0');
		$result['data'] = $this->user_model->invoice($bill_id);
		$result['data1'] = $this->user_model->invoice_usr($bill_id);
		$this->load->view('user/invoice_print',$result);
		$this->user_model->payment_success();
	}
}
?>