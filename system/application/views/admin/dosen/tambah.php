	<div class="block big"><!-- Block Begin -->
		<div class="titlebar">
			<h3>Informasi Mail</h3>
		</div>

		<div class="block_cont">
			<form method="post" class="form" action="<?php echo base_url(); ?>dosen/simpandosen">
				<div class="form_row"><label>Email:</label><input class="input required" type="text" style="width: 290px;" name="email"/></div>
				<div class="form_row"><label>Nama:</label><input class="input required" type="text" style="width: 290px;" name="nama"/></div>
				<div class="form_row"><label>NIDN:</label><input class="input required" type="text" style="width: 290px;" name="nidn"/></div>
				<div class="form_row"><label>TELP:</label><input class="input required" type="text" style="width: 290px;" name="telp"/></div>
				<div class="form_row"><label>Mail:</label><input class="input required" type="text" style="width: 290px;" name="mail"/></div>
				<div class="form_row"><label>Jurusan:</label><input class="input required" type="text" style="width: 290px;" name="jurusan"/></div>
				<input type="submit" value="Simpan Data" class="submit" /> 
			</form>
		</div>
	</div>
</div>