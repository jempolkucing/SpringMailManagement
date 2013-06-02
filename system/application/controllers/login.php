<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();
		$this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent'));
		$this->load->plugin();
		$this->load->model('Login_model');
		session_start();	
	}
	
	function index()
	{
		$data=array();
		$this->load->view('login/top',$data);
		$this->load->view('login/login',$data);

	}
	function check()
	{
		$username = $this->input->post('user');
		$pwd = $this->input->post('pass');
		$hasil = $this->Login_model->Data_Login($username,$pwd);
		if (count($hasil->result_array())>0){
			foreach($hasil->result() as $items){
				$session_username=$items->username."|".$items->nama."|".$items->status;
				$tanda=$items->status;
			}
			$_SESSION['username_belajar']=$session_username;
			if($tanda=="admin"){
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."home'>";
			}
		}
		else{
			?>
			<script type="text/javascript">
			alert("Username atau Password Yang Anda Masukkan Salah..!!!");			
			</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
		}
	}
	function logout()
	{
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
