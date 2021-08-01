<?php
class department_model extends CI_Model
{
	
	function user_view()
	{
		$query=$this->db->query("select * from user");
		return $query->result();

	}
	function dept_view($dept)
	{
		$log=$this->db->query("SELECT * FROM `dept` WHERE `dept_email`='$dept' ");
		return $log->result();
	}
	function get_user($dept)
	{
		$query=$this->db->query("select * from dept where dept_email='$dept'");
		$row=$query->row();
		$uid=$row->dept_id;
		$qry=$this->db->query("select * from user_add  where dept_id='$uid' and st=0 or st=3");
	
		return $qry->result();

	}
	function bill_add($id,$accno,$cardno,$dept)
	{
		$date=date('y-m-d');
		$query=$this->db->query("select * from dept where dept_email='$dept'");
		$row=$query->row();
		$uid=$row->dept_id;
		$query1=$this->db->query("select * from user_add where u_id='$id' and dept_id='$uid'");
		$row1=$query1->row();
		$c_id=$row1->id;
		$qry=$this->db->query("insert into bill values('','$id','$uid','$c_id','$date','$accno','$cardno',1)");
		$this->db->query("UPDATE `user_add` SET `st`=1 WHERE dept_id=$uid and u_id=$id");
		redirect('department/welcome');
	}
	function bill_view($dept)
	{
		$query=$this->db->query("select * from dept where dept_email='$dept'");
		$row=$query->row();
		$uid=$row->dept_id;
		$qry=$this->db->query("select * from bill inner join user_add on bill.user_add_id=user_add.id where bill.dept_id=$uid");
		
	
		return $qry->result();
		
	}
}
?>