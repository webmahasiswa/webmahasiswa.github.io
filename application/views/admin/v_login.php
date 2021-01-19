<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<body>
	<div class="container">
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	</div>
	<script src="<?php echo base_url() ?>assets/assets_register_login/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets_register_login/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets/assets_register_login/js/global.js"></script>
</body>
</html>