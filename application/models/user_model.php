<?php
class user_model extends CI_Model
{
	
	function user_view($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		
	
		return $log->result();

	}
	function user_loginview($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from account  where u_id=$uid");
	
		return $qry->result();
	}
	function reg($id,$name,$dob,$email,$phone,$password)
	{
		
		$qry="UPDATE `user` SET `name`='$name' ,`dob`='$dob',`email`='$email',`phone`='$phone',`password`='$password' WHERE id=$id";
		$this->db->query($qry);
		$qry2=$this->db->query("select id from user where email='$email'");
		$row=$qry2->row();
		$id=$row->id;
		$qry3="UPDATE `login` SET `u_name`='$email',`password`='$password', type='user', st=0 WHERE u_id=$id";
		$this->db->query($qry3);
		redirect('user/profile');
		
	}
	function addcard($id,$name,$accno,$cardno,$cvv,$exp,$upi)
	{
			$qry3="insert into account values('','$id','$accno','$name','$cardno','$cvv','$exp','$upi',100000,0)";
		$this->db->query($qry3);
		redirect('user/view_card');
		
	}
	function delete_card($id)
	{
		$this->db->query("DELETE FROM `account` WHERE id='$id'");
		redirect('user/view_card');
	}
	 function adddept($id,$deptid,$keyid)
	 {
		$qry3="insert into user_add values('','$id','$deptid','$keyid',0)";
		$this->db->query($qry3);
		redirect('user/dept_view');
		
		 
	 }
	function user_deptview($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from user_add 
								inner join dept on user_add.dept_id=dept.dept_id
								inner join user on user_add.u_id=user.id where u_id=$uid");
	
		return $qry->result();
	}
	function delete_dept($id)
		
	{
		$this->db->query("DELETE FROM `user_add` WHERE user_add.key_id='$id'");
		redirect('user/dept_view');
		
		
	}
	function bill_pay($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user'");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from bill inner join user_add on bill.user_add_id=user_add.id where bill.u_id=$uid and bill.st=1");
	
		return $qry->result();
	}
	function add_ebook($id,$title,$date,$amount)
	{
		
		$this->db->query("insert into ebook values('','$id','$title','$date','$amount',0)");
		redirect('user/e_book');
		
	}
	function ebook_viewlist($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from ebook where u_id=$uid");
		return $qry->result();
	}
	function ebook_month($user)
	{
		$log=$this->db->query("SELECT id FROM `user` WHERE `email`='$user' ");
		
		return $log->result();
	}
	function monthly_list($id,$stdate,$enddate)
	{
		
		$log=$this->db->query("SELECT title,date,amount FROM ebook WHERE date BETWEEN '$stdate' AND '$enddate' and u_id='$id' ");
	return $log->result();
		
	}
	function card_payment($name,$crd_no,$date,$cvv,$amt)
	{
		$qry=$this->db->query("SELECT * FROM account WHERE name='$name' and card_no='$crd_no' and  exp_date='$date' and cvv=$cvv");
		$row=$qry->row();
		if($qry->num_rows() == 0)
		{
			redirect('user/payment?error=1');
		}
		
		else if($row->bal < $amt){
			redirect('user/payment?error=2');
		}
		else{
			$count = $this->session->userdata('count');
			
			for ($i=0; $i <= $count; $i++) { 
				$id = $this->session->userdata('bill_id'.$i);
				$this->db->query("UPDATE `bill_connect`.`bill` SET `st` = '2' WHERE `bill`.`bill_id` =$id");

				$bal = $row->bal;
				$act_id = $row->id;
				$balance = $bal-$amt;
				$this->db->query("UPDATE `bill_connect`.`account` SET `bal` = '$balance' WHERE `account`.`id` =$act_id");
				
			}
			redirect('user/invoice');
		}
	}
	function upi_payment($upi,$amt)
	{
		$qry=$this->db->query("SELECT * FROM account WHERE acc_no='$upi'");
		$row=$qry->row();
		if($qry->num_rows() == 0)
		{
			redirect('user/upi_payment?error=1');
		}
		
		else if($row->bal < $amt){
			redirect('user/upi_payment?error=2');
		}
		else{
			$count = $this->session->userdata('count');
			
			for ($i=0; $i <= $count; $i++) { 
				$id = $this->session->userdata('bill_id'.$i);
				$this->db->query("UPDATE `bill_connect`.`bill` SET `st` = '2' WHERE `bill`.`bill_id` =$id");

				$bal = $row->bal;
				$act_id = $row->id;
				$balance = $bal-$amt;
				$this->db->query("UPDATE `bill_connect`.`account` SET `bal` = '$balance' WHERE `account`.`id` =$act_id");
				
			}
			redirect('user/invoice');
		}
	}
	function invoice($bill_id){
		$qry = $this->db->query("select * from bill where bill_id=$bill_id");
		$row = $qry->row();
		$id = $row->u_id;
		$query = $this->db->query("select * from bill 
								inner join dept on bill.dept_id = dept.dept_id
								inner join user on bill.u_id = user.id
								 where u_id = $id and bill.st=2");
		return $query->result();
	}
	function invoice_usr($bill_id){
		$qry = $this->db->query("select * from bill where bill_id=$bill_id");
		$row = $qry->row();
		$id = $row->u_id;
		$query = $this->db->query("select * from user 
								 where id = $id");
		return $query->result();
	}
	function payment_success()
	{
		$count = $this->session->userdata('count');
			
			for ($i=0; $i <= $count; $i++) { 
				$id = $this->session->userdata('bill_id'.$i);
				$this->db->query("UPDATE `bill_connect`.`bill` SET `st` = '3' WHERE `bill`.`bill_id` =$id");

				
			}
	}
	function card_select($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from account where u_id=$uid");
		return $qry->result();
	}
	function paid_bill($user)
	{
		$log=$this->db->query("SELECT * FROM `user` WHERE `email`='$user' ");
		$row=$log->row();
		$uid=$row->id;
		$qry=$this->db->query("select * from bill inner join user_add on bill.user_add_id=user_add.id where bill.u_id=$uid and bill.st=3");
		
	
		return $qry->result();
		
	}
}
?>