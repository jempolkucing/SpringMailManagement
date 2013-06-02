<?php
class Admin_model extends Model
	{
		function Admin_model()
		{
			parent::Model();
		}
		function Simpan_Mail($tabel,$data)
		{
			$s=$this->db->insert($tabel,$data);
			return $s;
		}
		
        function Ubah_Email($tabel,$seleksi)
        {
                $query=$this->db->query("select * from $tabel where $seleksi");
                return $query;
        }
		function Update_Email($tabel,$isi,$seleksi)
		{
			$this->db->where($seleksi,$isi[$seleksi]);
			$this->db->update($tabel,$isi);
		}
		function Hapus_Email($id,$seleksi,$tabel)
		{
			$this->db->where($seleksi,$id);
			$this->db->delete($tabel);
		}
		function Semua_User_Dosen()
        {
		$q=$this->db->query("select * from users  order by users.id DESC"
        );
        return $q;
        }
		function Mahasiswa_Temp()
		{
			$q=$this->db->query("select * from tempmhs where npm='06.2009.1.04861'");
			return $q;
		}
		function Mahasiswa()
		{
			$q=$this->db->query("select * from mhs  order by mhs.id DESC"
			);
			return $q;
		}
		function Update_Password($in,$id)
		{
			$q=$this->db->query("update login set password=md5('".$in."') where id='".$id."'");
			return $q;
		}
		function Tampil_Data($tabel,$id)
		{
			$q=$this->db->query("select * from ".$tabel." order by ".$id." DESC");
			return $q;
		}
		// function Tampil_Data_Terbatas($tabel,$id,$join,$offset,$limit)
		function Tampil_Data_Terbatas($tabel,$id,$offset,$limit)
		{
			$q=$this->db->query("select * from ".$tabel." order by ".$id." DESC LIMIT ".$offset.",".$limit."");
			return $q;
		}
	}
?>
