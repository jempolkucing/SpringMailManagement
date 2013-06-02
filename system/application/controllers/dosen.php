<?php

class Dosen extends Controller {

	function Dosen()
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
			// $data["dosen"] = $this->Admin_model->Semua_User_Dosen();
			$data["dosen"] = $this->Admin_model->Tampil_Data_Terbatas("users","id","11","10");
			$this->load->view('admin/top',$data);
			$this->load->view('admin/dosen/dosen',$data);
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
	
	function tambahdosen()
	{
		$data = array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$tgl = "%d-%m-%Y";
		$time = time();
		$data["wkt_skr"] = mdate($tgl,$time);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){
			$this->load->view('admin/top',$data);
			$this->load->view('admin/dosen/tambah',$data);
			$this->load->view('admin/bottom');
			}
			else
			{
			HarusLogin();
			}
		}
		else{
			HarusLogin();
			}
	}
	
	function simpandosen() 
	{
		$data=array();
		$data2=array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){
				$tgl = " %Y-%m-%d";
				$time = time();
				$in["email"]=$this->input->post('email'). "@itats.ac.idaaii007";
				$in["password"]="f2216eea562703e902aa6c70ab7ecd0a";
				$in["nama"]=$this->input->post('nama');
				$in["nidn"]=$this->input->post('nidn');
				$in["telp"]=$this->input->post('telp');
				$in["mail"]=$this->input->post('mail');
				$in["jurusan"]=$this->input->post('jurusan');
				if($in["email"]=="" || $in["nama"]=="")
				{
					echo "Data masih kosong..!!!";
				}
				else{
				$this->Admin_model->Simpan_Mail("users",$in);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."dosen'>";
				}
			}
			else
			{
			HarusLogin();
			}
		}
		else
			{
			HarusLogin();
			}
	}
	
	function hapusdosen()
	{
		$id='';
		if ($this->uri->segment(3) === FALSE)
		{
    		$id=$id;
		}
		else
		{
    		$id = $this->uri->segment(3);
		}
		$data = array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){
			$this->Admin_model->Hapus_Email($id,"id","users");
			?>
			<script type="text/javascript">
			javascript:history.go(-1);
			</script>
			<?php
			}
			else{
			HarusLogin();
			}
		}
		else{
			HarusLogin();
			}
	}
	
	function editdosen()
	{
		$id='';
		if ($this->uri->segment(3) === FALSE)
		{
    			$id=$id;
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
		$data = array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){
			$tgl = "%d-%m-%Y";
			$time = time();
			$data["wkt_skr"] = mdate($tgl,$time);
			$data["detail"]=$this->Admin_model->Ubah_Email("users","id=".$id."");
			$this->load->view('admin/top',$data);
			$this->load->view('admin/dosen/edit',$data);
			$this->load->view('admin/bottom');
			}
			else{
			HarusLogin();
			}
		}
		else
			{
			HarusLogin();
			}
	}
	
	function updatedosen()
	{
		$in = array();
		$session=isset($_SESSION['username_belajar']) ? $_SESSION['username_belajar']:'';
		if($session!=""){
		$pecah=explode("|",$session);
		$data["username"]=$pecah[0];
		$data["nama"]=$pecah[1];
		$data["status"]=$pecah[2];
			if($data["status"]=="admin"){

				$in["id"]=$this->input->post('id');
					if($this->input->post('izinkan')=="opt2") {
							if(substr($this->input->post('emailasli'),-7)== "aaii007"){
							$in["email"]= substr($this->input->post('emailasli'),0,-7);
							}
							else{
							$in["email"]= $this->input->post('emailasli');

							}
					}
					if($this->input->post('izinkan')=="opt1") {

							if(substr($this->input->post('emailasli'),-7)== "aaii007"){
							$in["email"]= $this->input->post('emailasli');
							}
							else{
							$in["email"]= $this->input->post('emailasli'). "aaii007";

							}					}
					if($this->input->post('izinkan')=="opt3") {
						$in["email"]=$this->input->post('emailasli');
						$in["password"]="f2216eea562703e902aa6c70ab7ecd0a";
						
					}

				$in["nama"]=$this->input->post('nama');
				$in["nidn"]=$this->input->post('nidn');
				$in["telp"]=$this->input->post('telp');
				$in["mail"]=$this->input->post('mail');
				$in["jurusan"]=$this->input->post('jurusan');

				$this->Admin_model->Update_Email("users",$in,"id");
	   			echo "<meta http-equiv='refresh' content='0; url=".base_url()."dosen"."'>";
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
			document.location = \''.base_url().'dosen/'.$reloadURL.'\'
			</script>
			</body>
			</html>';
	} 	
}
?>