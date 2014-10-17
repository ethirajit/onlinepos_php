<?php $this->load->view("partial/header"); ?>
<h4 class="headline"><?php echo $this->lang->line('module_config'); ?><span class="line"></span></h4>
<?php
$attributes_config_form = array('class' => 'form-horizontal form-border no-margin', 'id' => 'config_form', 'data-validate' => 'parsley', 'novalidate' => '');
echo form_open('config/save/',$attributes_config_form);
?>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Company Configuration</div>
				<div class="panel-body">
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_company').':', 'company',array('class'=>'wide required')); ?></label>
							<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'company',
								'id'=>'company',
								'value'=>$this->config->item('company'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
							</div><!-- /.col -->
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_address').':', 'address',array('class'=>'wide required')); ?></label>
							<div class="col-lg-12">
								<?php echo form_textarea(array(
								'name'=>'address',
								'id'=>'address',
								'rows'=>4,
								'cols'=>17,
								'value'=>$this->config->item('address'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
							</div>
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_phone').':', 'phone',array('class'=>'wide required')); ?></label>
							<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'phone',
								'id'=>'phone',
								'value'=>$this->config->item('phone'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
							</div>
 
							<label class="col-lg-12"><?php echo form_label($this->lang->line('common_email').':', 'email',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'email',
							'id'=>'email',
							'value'=>$this->config->item('email'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
							</div><!-- /.col -->
					
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_fax').':', 'fax',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'fax',
								'id'=>'fax',
								'value'=>$this->config->item('fax'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
							</div><!-- /.col -->
					
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_website').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'website',
							'id'=>'website',
							'value'=>$this->config->item('website'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
							</div><!-- /.col -->
							  
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_language').':', 'language',array('class'=>'wide required')); ?></label>											
							<div class="col-lg-12">
							<?php 
							$attribute_config_lang='class="form-control input-sm bounceIn animation-delay2"';
							echo form_dropdown('language', array(
							'en'    => 'English',
							'es'    => 'Spanish',
							'ru'    => 'Russian',
							'nl-BE' => 'Dutch',
							'zh'    => 'Chinese',
							'id'    => 'Indonesian',
							'fr'	=> 'French',
							'th'	=> 'Thai'),$this->config->item('language'),$attribute_config_lang);?>
							<div class="seperator"></div>
							</div><!-- /.col -->
				
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_timezone').':', 'timezone',array('class'=>'wide required')); ?></label>
							<div class="col-lg-12">
								<?php 
								$attribute_config_timezone='class="form-control input-sm bounceIn animation-delay2"';
								echo form_dropdown('timezone', 
								 array(
									'Pacific/Midway'=>'(GMT-11:00) Midway Island, Samoa',
									'America/Adak'=>'(GMT-10:00) Hawaii-Aleutian',
									'Etc/GMT+10'=>'(GMT-10:00) Hawaii',
									'Pacific/Marquesas'=>'(GMT-09:30) Marquesas Islands',
									'Pacific/Gambier'=>'(GMT-09:00) Gambier Islands',
									'America/Anchorage'=>'(GMT-09:00) Alaska',
									'America/Ensenada'=>'(GMT-08:00) Tijuana, Baja California',
									'Etc/GMT+8'=>'(GMT-08:00) Pitcairn Islands',
									'America/Los_Angeles'=>'(GMT-08:00) Pacific Time (US & Canada)',
									'America/Denver'=>'(GMT-07:00) Mountain Time (US & Canada)',
									'America/Chihuahua'=>'(GMT-07:00) Chihuahua, La Paz, Mazatlan',
									'America/Dawson_Creek'=>'(GMT-07:00) Arizona',
									'America/Belize'=>'(GMT-06:00) Saskatchewan, Central America',
									'America/Cancun'=>'(GMT-06:00) Guadalajara, Mexico City, Monterrey',
									'Chile/EasterIsland'=>'(GMT-06:00) Easter Island',
									'America/Chicago'=>'(GMT-06:00) Central Time (US & Canada)',
									'America/New_York'=>'(GMT-05:00) Eastern Time (US & Canada)',
									'America/Havana'=>'(GMT-05:00) Cuba',
									'America/Bogota'=>'(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
									'America/Caracas'=>'(GMT-04:30) Caracas',
									'America/Santiago'=>'(GMT-04:00) Santiago',
									'America/La_Paz'=>'(GMT-04:00) La Paz',
									'Atlantic/Stanley'=>'(GMT-04:00) Faukland Islands',
									'America/Campo_Grande'=>'(GMT-04:00) Brazil',
									'America/Goose_Bay'=>'(GMT-04:00) Atlantic Time (Goose Bay)',
									'America/Glace_Bay'=>'(GMT-04:00) Atlantic Time (Canada)',
									'America/St_Johns'=>'(GMT-03:30) Newfoundland',
									'America/Araguaina'=>'(GMT-03:00) UTC-3',
									'America/Montevideo'=>'(GMT-03:00) Montevideo',
									'America/Miquelon'=>'(GMT-03:00) Miquelon, St. Pierre',
									'America/Godthab'=>'(GMT-03:00) Greenland',
									'America/Argentina/Buenos_Aires'=>'(GMT-03:00) Buenos Aires',
									'America/Sao_Paulo'=>'(GMT-03:00) Brasilia',
									'America/Noronha'=>'(GMT-02:00) Mid-Atlantic',
									'Atlantic/Cape_Verde'=>'(GMT-01:00) Cape Verde Is.',
									'Atlantic/Azores'=>'(GMT-01:00) Azores',
									'Europe/Belfast'=>'(GMT) Greenwich Mean Time : Belfast',
									'Europe/Dublin'=>'(GMT) Greenwich Mean Time : Dublin',
									'Europe/Lisbon'=>'(GMT) Greenwich Mean Time : Lisbon',
									'Europe/London'=>'(GMT) Greenwich Mean Time : London',
									'Africa/Abidjan'=>'(GMT) Monrovia, Reykjavik',
									'Europe/Amsterdam'=>'(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
									'Europe/Belgrade'=>'(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
									'Europe/Brussels'=>'(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
									'Africa/Algiers'=>'(GMT+01:00) West Central Africa',
									'Africa/Windhoek'=>'(GMT+01:00) Windhoek',
									'Asia/Beirut'=>'(GMT+02:00) Beirut',
									'Africa/Cairo'=>'(GMT+02:00) Cairo',
									'Asia/Gaza'=>'(GMT+02:00) Gaza',
									'Africa/Blantyre'=>'(GMT+02:00) Harare, Pretoria',
									'Asia/Jerusalem'=>'(GMT+02:00) Jerusalem',
									'Europe/Minsk'=>'(GMT+02:00) Minsk',
									'Asia/Damascus'=>'(GMT+02:00) Syria',
									'Europe/Moscow'=>'(GMT+03:00) Moscow, St. Petersburg, Volgograd',
									'Africa/Addis_Ababa'=>'(GMT+03:00) Nairobi',
									'Asia/Tehran'=>'(GMT+03:30) Tehran',
									'Asia/Dubai'=>'(GMT+04:00) Abu Dhabi, Muscat',
									'Asia/Yerevan'=>'(GMT+04:00) Yerevan',
									'Asia/Kabul'=>'(GMT+04:30) Kabul',
									'Asia/Baku'=>'(GMT+05:00) Baku',/*GARRISON ADDED 4/20/2013*/
									'Asia/Yekaterinburg'=>'(GMT+05:00) Ekaterinburg',
									'Asia/Tashkent'=>'(GMT+05:00) Tashkent',
									'Asia/Kolkata'=>'(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
									'Asia/Katmandu'=>'(GMT+05:45) Kathmandu',
									'Asia/Dhaka'=>'(GMT+06:00) Astana, Dhaka',
									'Asia/Novosibirsk'=>'(GMT+06:00) Novosibirsk',
									'Asia/Rangoon'=>'(GMT+06:30) Yangon (Rangoon)',
									'Asia/Bangkok'=>'(GMT+07:00) Bangkok, Hanoi, Jakarta',
									'Asia/Krasnoyarsk'=>'(GMT+07:00) Krasnoyarsk',
									'Asia/Hong_Kong'=>'(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
									'Asia/Irkutsk'=>'(GMT+08:00) Irkutsk, Ulaan Bataar',
									'Australia/Perth'=>'(GMT+08:00) Perth',
									'Australia/Eucla'=>'(GMT+08:45) Eucla',
									'Asia/Tokyo'=>'(GMT+09:00) Osaka, Sapporo, Tokyo',
									'Asia/Seoul'=>'(GMT+09:00) Seoul',
									'Asia/Yakutsk'=>'(GMT+09:00) Yakutsk',
									'Australia/Adelaide'=>'(GMT+09:30) Adelaide',
									'Australia/Darwin'=>'(GMT+09:30) Darwin',
									'Australia/Brisbane'=>'(GMT+10:00) Brisbane',
									'Australia/Hobart'=>'(GMT+10:00) Hobart',
									'Asia/Vladivostok'=>'(GMT+10:00) Vladivostok',
									'Australia/Lord_Howe'=>'(GMT+10:30) Lord Howe Island',
									'Etc/GMT-11'=>'(GMT+11:00) Solomon Is., New Caledonia',
									'Asia/Magadan'=>'(GMT+11:00) Magadan',
									'Pacific/Norfolk'=>'(GMT+11:30) Norfolk Island',
									'Asia/Anadyr'=>'(GMT+12:00) Anadyr, Kamchatka',
									'Pacific/Auckland'=>'(GMT+12:00) Auckland, Wellington',
									'Etc/GMT-12'=>'(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
									'Pacific/Chatham'=>'(GMT+12:45) Chatham Islands',
									'Pacific/Tongatapu'=>'(GMT+13:00) Nuku\'alofa',
									'Pacific/Kiritimati'=>'(GMT+14:00) Kiritimati'),
									$this->config->item('timezone') ? $this->config->item('timezone') : date_default_timezone_get(),$attribute_config_timezone);?>
								<div class="seperator"></div>												
							</div><!-- /.col -->
        </div>            
	</div> <!panel body>
</div><!panel>
<!-- end of first grid -->
	
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Store Configuration</div>
				<div class="panel-body">
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_default_tax_rate_1').':', 'default_tax_1_rate',array('class'=>'wide required')); ?></label>
						<div class="col-lg-6">
								<?php echo form_input(array(
								'name'=>'tax1',
								'id'=>'tax1',
								'value'=>$this->config->item('tax1'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
						</div><!-- /.col -->
						<div class="col-lg-6">
								<?php echo form_input(array(
								'name'=>'tax11',
								'id'=>'tax11',
								'value'=>$this->config->item('tax11'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
						<div class="seperator"></div>
						</div><!-- /.col -->	
   
						<label class="col-lg-12">
							<?php echo form_label($this->lang->line('config_default_tax_rate_2').':', 'default_tax_1_rate',array('class'=>'wide')); ?>
						</label>
							<div class="col-lg-6">
								<?php echo form_input(array(
								'name'=>'tax1',
								'id'=>'tax1',
								'value'=>$this->config->item('tax1'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							</div><!-- /.col -->
							<div class="col-lg-6">
								<?php echo form_input(array(
								'name'=>'tax11',
								'id'=>'tax11',
								'value'=>$this->config->item('tax11'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
									<div class="seperator"></div>
							</div><!-- /.col -->

							<label class="col-lg-6"><?php echo form_label($this->lang->line('config_currency_symbol').':', 'currency_symbol',array('class'=>'wide')); ?></label>
							<label class="col-lg-6"><?php echo form_label($this->lang->line('config_currency_side').':', 'currency_side',array('class'=>''));?></label>
							<div class="col-lg-6">
								<?php echo form_input(array(
								'name'=>'currency',
								'id'=>'currency',
								'value'=>$this->config->item('currency'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							</div><!-- /.col -->		
							<div class="col-lg-6">
								<?php echo form_checkbox(array(
									'name'=>'currency_side',
									'id'=>'currency_side',
									'value'=>'currency_side',
									'checked'=>$this->config->item('currency_side')));?>
									<div class="seperator"></div>
									<div class="seperator"></div>
									<div class="seperator"></div>
									<div class="seperator"></div>
							</div><!-- /.col -->
								<label class="col-lg-12"><?php echo form_label($this->lang->line('common_return_policy').':', 'return_policy',array('class'=>'wide required')); ?></label>
								<div class="col-lg-12">
									<?php echo form_textarea(array(
										'name'=>'return_policy',
										'id'=>'return_policy',
										'rows'=>'4',
										'cols'=>'17',
										'value'=>$this->config->item('return_policy'),
										'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>							
								</div><!-- /.col -->
								
								<label class="col-lg-12"><?php echo form_label($this->lang->line('config_stock_location').':', 'stock_location',array('class'=>'required wide')); ?></label>
								<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'stock',
								'id'=>'stock',
								'value'=>$this->config->item('stock'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
								</div><!-- /.col -->
						
							<label class="col-lg-7">
							<?php echo form_label($this->lang->line('config_print_after_sale').':', 'print_after_sale',array('class'=>'wide')); ?></label>
								<div class="col-lg-5">
								<?php echo form_checkbox(array(
									'name'=>'print_after_sale',
									'id'=>'print_after_sale',
									'value'=>'print_after_sale',
									'checked'=>$this->config->item('print_after_sale'),
									'class' => 'form-control input-sm bounceIn animation-delay'));?>
								</div>
			</div>
		</div>
	</div>
<!-- end of second grid -->

<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">Custom Configuration</div>
        <div class="panel-body">
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom1').':', 'website',array('class'=>'wide')); ?></label>
						<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom1_name',
							'id'=>'custom1_name',
							'value'=>$this->config->item('custom1_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
						</div><!-- /.col -->

						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom2').':', 'website',array('class'=>'wide')); ?></label>
						<div class="col-lg-12">
							<?php echo form_input(array('name'=>'custom2_name',
							'id'=>'custom2_name',
							'value'=>$this->config->item('custom2_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
						</div><!-- /.col -->
				
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom3').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom3_name',
							'id'=>'custom3_name',
							'value'=>$this->config->item('custom3_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
						</div><!-- /.col -->
					
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom4').':', 'website',array('class'=>'wide')); ?></label>
								<div class="col-lg-12">
									<?php echo form_input(array(
									'name'=>'custom4_name',
									'id'=>'custom4_name',
									'value'=>$this->config->item('custom4_name'),
									'class' => 'form-control input-sm bounceIn animation-delay2'));?>
									<div class="seperator"></div>
								</div><!-- /.col -->
						
							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom5').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom5_name',
							'id'=>'custom5_name',
							'value'=>$this->config->item('custom5_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
							</div><!-- /.col -->

							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom6').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom6_name',
							'id'=>'custom6_name',
							'value'=>$this->config->item('custom6_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
						</div><!-- /.col -->
					
						<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom7').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom7_name',
							'id'=>'custom7_name',
							'value'=>$this->config->item('custom7_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
							</div><!-- /.col -->

							<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom8').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array(
							'name'=>'custom8_name',
							'id'=>'custom8_name',
							'value'=>$this->config->item('custom8_name'),
							'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							<div class="seperator"></div>
							</div><!-- /.col -->
						
								<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom9').':', 'website',array('class'=>'wide')); ?></label>
							<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'custom9_name',
								'id'=>'custom9_name',
								'value'=>$this->config->item('custom9_name'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
							</div><!-- /.col -->

								<label class="col-lg-12"><?php echo form_label($this->lang->line('config_custom10').':', 'website',array('class'=>'wide')); ?></label>
								<div class="col-lg-12">
								<?php echo form_input(array(
								'name'=>'custom10_name',
								'id'=>'custom10_name',
								'value'=>$this->config->item('custom10_name'),
								'class' => 'form-control input-sm bounceIn animation-delay2'));?>
								<div class="seperator"></div>
								</div><!-- /.col -->
						
						<div class="panel-footer">
							<?php 
							echo form_submit(array(
								'name'=>'submit',
								'id'=>'submit',
								'value'=>$this->lang->line('common_submit'),
								'class'=>'btn btn-sm btn-success'));
							?>
						</div>
		</div>
	</div>
</div>
</div><!row>
<?php $this->load->view("partial/footer"); ?>
</body>
</html>