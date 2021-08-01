<?php
class bconnect_model extends CI_Model
{
	function reg($name,$dob,$email,$phone,$password)
	{
		
		$qry="insert into user values('','$name','$dob','$email','$phone','$password',1)";
		$this->db->query($qry);
		$qry2=$this->db->query("select id from user where email='$email'");
		$row=$qry2->row();
		$id=$row->id;
		$qry3="insert into login values('','$id','$email','$password','user',0)";
		$this->db->query($qry3);
		redirect('Bill_connect/login');
		
	}
		function user_view()
	{
		$query=$this->db->query("select * from user");
		return $query->result();

	}
		function dept_view()
	{
		$query=$this->db->query("select * from dept");
		return $query->result();

	}
	
	function login($username,$password)
	{
		$query=$this->db->query("select * from login where u_name='$username' and password='$password'");
		if(($query->num_rows())>0)
		
		{
			$row=$query->row();
			$typ=$row->type;
			echo $typ;
			if($typ == 'admin')
			{
				redirect('Bill_connect/admin');
			}
			if($typ == 'department')
			{
				$qry=$this->db->query("select * from dept where dept_email='$username'");
				$row = $qry->row();
				$dept_name=$row->dept_name;
				$this->session->set_userdata(array('email'=>$username,'dept_name'=>$dept_name));
				redirect('/department/welcome');
			}
			if($typ == 'user')
			{
				$qry=$this->db->query("select * from user where email='$username'");
				$row = $qry->row();
				$name = $row->name;
				$this->session->set_userdata(array('email'=>$username,'name'=>$name));
				redirect('user/welcome');
			}
		}
		else
		{
			redirect('Bill_connect/login?error=1');
		}
	}
	function add_dept($dept_name,$email,$password,$pic)
	{
		$this->db->query("insert into dept values('','$dept_name','$email','$pic',1)");
		$this->db->query("insert into login values('',0,'$email','$password','department',1)");
		redirect('Bill_connect/admin');
	}
	
	function delete_user($id)
		
	{
		$this->db->query("DELETE FROM `user` WHERE id='$id'");
		$this->db->query("DELETE FROM `login` WHERE u_id='$id'");
		redirect('Bill_connect/admin_user_view');
		
		
	}
	
	function delete_dept($id,$email)
		
	{
		$this->db->query("DELETE FROM `dept` WHERE dept_id='$id'");
		$this->db->query("DELETE FROM `login` WHERE u_name='$email'");
		redirect('Bill_connect/admin_dept_view');
		
		
	}
	function edit_dept($id)
	{
			$log=$this->db->query("SELECT * FROM `dept` WHERE `dept_id`='$id' ");
		return $log->result();
	}
	
	function update_user($dept_name,$email,$id)
	{
		$this->db->query("UPDATE `dept` SET `dept_name`='$dept_name' ,`dept_email`='$email' WHERE dept_id='$id'");
		redirect('Bill_connect/admin_dept_view');
	}
	function feedback($name,$email,$phone,$message)
	{
		$this->db->query("insert into feedback values('','$name','$email','$phone','$message',0)");
		redirect('Bill_connect/index');
	}
	function feedback_view()
	{
		$query=$this->db->query("select * from feedback where st=0");
		return $query->result();

	}
	function old_feedback_view()
	{
		$query=$this->db->query("select * from feedback where st=1");
		return $query->result();

	}
	function feedback_delete($id)
	{
		$this->db->query("DELETE FROM `feedback` WHERE id='$id'");
		redirect('Bill_connect/feedback');
		
	}
	function feedback_update($id)
	{
		$this->db->query("UPDATE `feedback` SET `st`=1 WHERE id='$id'");
		redirect('Bill_connect/feedback');
		
	}
}
?>