<?php
class Login_model extends Model
	{
		function Login_model()
		{
			parent::Model();
		}
		function Data_Login($user,$pass)
		{ 
			//$user_bersih=mysql_real_escape_string($user);
			$user_bersih=mysql_real_escape_string($user);
			$pass_bersih=mysql_real_escape_string($pass);
			$query=$this->db->query("select * from login where username='$user_bersih' and password=md5('$pass_bersih')");
			return $query;
		}
	}
?>
