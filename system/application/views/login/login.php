<div id="loginbox">
		<a href="#" id="logo">Management Virtual User Mail Server ITATS</a>
		<div id="loginform">
			<form name="login" action="<?php echo base_url(); ?>login/check" method="post">
				<div id="username_field"><input type="text" name="user" placeholder="Username" class="required" value=""  /></div>
				<div id="password_field"><input type="password" name="pass" placeholder="Password" class="required" value=""  /></div>
				<div id="buttonline">
					<input type="submit" id="loginbutton" class="float_left width_4" value="Login" />
					
				</div>
			</form>
			<div id="alertnama" style="display:none; background-color:#999999; color:#FFFFFF; padding:5px;">Username tidak diijinkan kosong</div>
			<div id="alertpass" style="display:none; background-color:#999999; color:#FFFFFF; padding:5px;">Password tidak diijinkan kosong</div>
		</div>
	</div>
<!-- 
JempolKucing
JasaPembuatan Aplikasi Onffline
031123456
-->
</body>
</html>