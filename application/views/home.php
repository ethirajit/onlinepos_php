<?php $this->load->view("partial/header"); ?>

		<h3><?php echo $this->lang->line('common_welcome_message'); ?></h3>
			<?php
			foreach($allowed_modules->result() as $module)
			{
			?>
				<a href="<?php echo site_url("$module->module_id");?>">
				<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a><br />
				<a href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
				 - <?php echo $this->lang->line('module_'.$module->module_id.'_desc');?>
			<?php
			}
			?>
		</div><!-- /main-container -->
	</div><!-- /wrapper -->
<?php $this->load->view("partial/footer"); ?>
</body>
</html>