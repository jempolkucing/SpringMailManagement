<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();
		$this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','image_lib'));
		$this->load->plugin();
		$this->load->model(array('Login_model', 'Admin_model'));
		session_start();
	}
	
	function index()
	{
	
		$data = array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){
			$this->load->view('admin/top',$data);
			$this->load->view('admin/home',$data);
			$this->load->view('admin/bottom');
			}
			else{
			HarusLogin();
			}
		}
		else{
			HarusLogin();
			}
	}
	private function HarusLogin()
	{
			$Harus ="<script type=\"text/javascript\" language=\"javascript\">";
			$Harus .="alert(\"Anda tidak berhak masuk ke Control Panel Admin...!!!\");";
			$Harus .="</script>";
			$Harus .="<meta http-equiv='refresh' content='0; url=\".base_url().\"'>";
			echo $Harus;
	}
	private function reloadPage($reloadURL)
	{
		echo 
			'<html>
			<head>
			</head>
			<body>
			<script languange="javascript">
			document.location = \''.base_url().'home/'.$reloadURL.'\'
			</script>
			</body>
			</html>';
	} 	
}









?>
