	<div class="block big"><!-- Block Begin -->
		<div class="titlebar">
			<h3>Informasi Mail</h3>
		</div>
		<?php
		foreach($detail->result_array() as $d)
		{
		$tanda = substr($d['email'],-7);
			if($tanda == "aaii007"){
				$email = substr($d['email'],0,-7);
				$statusaktif = 0;
			}
			else
			{
				$email = $d['email'];
				$statusaktif = 1;
			}
		$id=$d['id'];
		$nama=$d['nama'];
		$nidn=$d['nidn'];
		$telp=$d['telp'];
		$mail=$d['mail'];
		$jurusan=$d['jurusan'];
		}
		?>

	<div class="block_cont">
		<form method="post" class="form" action="<?php echo base_url(); ?>dosen/updatedosen">
			<input type="hidden" style="width: 290px;" name="id" value="<?php echo $id; ?>" />
			<input type="hidden" style="width: 290px;" name="emailasli" value="<?php echo $d['email']; ?>" />
			<div class="form_row"><label>Email:</label><input class="input required" type="text" style="width: 290px;" name="email" value="<?php echo $email; ?>" /></div>
			<div class="form_row"><label>Nama:</label><input class="input required" type="text" style="width: 290px;" name="nama" value="<?php echo $nama; ?>" /></div>
			<div class="form_row"><label>NIDN:</label><input class="input required" type="text" style="width: 290px;" name="nidn" value="<?php echo $nidn; ?>" /></div>
			<div class="form_row"><label>TELP:</label><input class="input required" type="text" style="width: 290px;" name="telp" value="<?php echo $telp; ?>" /></div>
			<div class="form_row"><label>Mail:</label><input class="input required" type="text" style="width: 290px;" name="mail" value="<?php echo $mail; ?>" /></div>
			<div class="form_row"><label>Jurusan:</label><input class="input required" type="text" style="width: 290px;" name="jurusan" value="<?php echo $jurusan; ?>" /></div>
			<div class="form_row"><label>Status:</label>
				<?php
				if($statusaktif==0){
				echo "<select name='izinkan' class='select' style='width: 300px;'>
												<option value='opt1'>NonAktif</option>
												<option value='opt2'>Aktif</option>";
				}
				else{
				echo "<select name='izinkan' class='select' style='width: 300px;'>
												<option value='opt2'>Aktif</option>
												<option value='opt1'>NonAktif</option>";
				}
				?>
				<option value="opt3">Reset</option></select>
			</div>
			<input type="submit" value="Simpan Data" class="submit" /> 
		</form>
	</div>
</div>


