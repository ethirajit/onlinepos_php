<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/font-awesome.css"/>
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/endless.css"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Point Of Sale <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.10.2.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>js/modernizr.jss" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>js/pace.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>js/jquery.popupoverlay.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>js/jquery.cookie.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="<?php echo base_url();?>js/endless/endless.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>
</head>
<body>
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-success">Online Point of Sale</span> <span style="color:#ccc; text-shadow:0 1px #fff"><?php echo $this->config->item('application_version'); ?></span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> <?php echo $this->lang->line('login_login'); ?>
					</div>

					<div class="pull-right">
						<span style="font-size:11px;">Don't have any account?</span>
						<a class="btn btn-default btn-xs login-link" href="register.html" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
					</div>
				</div>
				<?php echo form_open('login') ?>
				<div class="panel-body">
					<form class="form-login">
						<div class="form-group">
							<label><?php echo $this->lang->line('login_username'); ?></label>
							<?php echo form_input(array(
							'name'=>'username', 
							'size'=>'20',
							'class' => 'form-control input-sm bounceIn animation-delay2')); ?>
						</div>
						<div class="form-group">
							<label><?php echo $this->lang->line('login_password'); ?></label>
							<?php echo form_password(array(
							'name'=>'password', 
							'size'=>'20',
							'class' => 'form-control input-sm bounceIn animation-delay4')); ?>
						</div>
						<div class="form-group">
							<label class="label-checkbox inline">
								<input type="checkbox" class="regular-checkbox chk-delete">
								<span class="custom-checkbox info bounceIn animation-delay4"></span>
							</label>
							Remember me		
						</div>
		
						<div class="seperator"></div>
						<div class="form-group">
							Forgot your password?<br>
							Click <a href="#">here</a> to reset your password
						</div>

						<hr>
						<?php echo validation_errors(); ?>
						<?php echo form_submit(array(
						'name'=>'loginButton',
						'value'=>'Sign in',
						'class'=>'btn btn-success btn-sm bounceIn animation-delay5 pull-right')); ?>
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->
<?php echo form_close(); ?>
</body>
</html>
