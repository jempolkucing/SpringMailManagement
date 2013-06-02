<ul id="navigation" style="margin-right:10px;">
				<li><a href="<?php echo base_url(); ?>dosen/tambahdosen" class="icon_plus">Tambah</a></li>

			</ul>
  
			<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Informasi Mail</h3>
				</div>

	<div class="block_cont">
					<div class="table"><table><!-- Table Wrapper Begin -->
						<tr>
							<th width="20">No</th>
							<th>Email</th>
							<th>Nama</th>
							<th>NIDN</th>
							<th>Telp</th>
							<th>Jurusan</th>
							<th width="100">Action</th>
						</tr>
						
<?php

$no=1;
foreach($dosen->result_array() as $s)
{
$tanda = substr($s['email'],-7);
	if($tanda == "aaii007"){
		$email = substr($s['email'],0,-7);
		$statusaktif = 0;
	}
	else
	{
		$email = $s['email'];
		$statusaktif = 1;
	}
?>
<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $s['nama']; ?></td>
							<td><?php echo $s['nidn']; ?></td>
							<td><?php echo $s['telp']; ?></td>
							<td><?php echo $s['jurusan']; ?></td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar">
							
							<a href="dosen/editdosen/<?php echo $s['id']; ?>" class="action edit"><span>Edit</span></a>
							<a href="dosen/hapusdosen/<?php echo $s['id']; ?>" class="action delete" onClick="return confirm('Anda yakin ingin menghapus data ini?')" ><span>Delete</span></a>
							<?php
							if($statusaktif==1){
							?>
							<a class="action view" ><span>Aktif</span></a>
							<?php
							}
							?>
							</div></td>
						</tr>

<?php
$no++;
}
?>