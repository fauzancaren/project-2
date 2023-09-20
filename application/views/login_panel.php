<div class="panel panel-primary" style="max-width: 400px; margin: 0 auto;">
	<div class="panel-heading" style="background-color: #337ab7; color: white; padding: 10px;">
		<h3 class="panel-title">USER LOGIN</h3>
	</div>
	<div class="panel-body" style="padding: 20px;">
		<p>Untuk mulai menggunakan software ini, Anda diharuskan login terlebih dahulu.
			Silahkan isi username dan password yang benar di bawah ini:</p>
		<form name="frmLogin" id="frmLogin" method="post" role="form" action="<?=base_url()?>index.php/login/verify">
			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" type="text" id="user_id" name="user_id" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" id="password" name="password" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<input class="btn btn-primary btn-block" type="submit" value="Login" style="height: 40px;">
				<?php if ($message != "") { ?>
					<div id="lblMessage" class="alert alert-danger" style="margin-top: 10px;">
						<?php echo $message; ?>
					</div>
				<?php }; ?>
			</div>
		</form>
	</div>	 
</div>
