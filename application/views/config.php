<?php $this->load->view("partial/header"); ?>
<div id="page_title"><?php echo $this->lang->line('module_config'); ?></div>
<?php
echo form_open('config/save/',array('id'=>'config_form'));
?>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate="">
					<div class="form-group">
						<label class="control-label col-lg-3">company name</label>
							<div class="col-lg-9">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="control-label col-lg-3">company address</label>
							<div class="col-lg-9">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
						<div class="form-group">
							<label class="control-label col-lg-3">phone number</label>
								<div class="col-lg-9">
							<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
								<div class="seperator"></div>
								<label class="label-checkbox inline"></label>
							</div><!-- /.col -->
						</div><!-- /form-group -->
					<div class="field_row clearfix">    
						<div class="form-group">
							<label class="control-label col-lg-3">Email</label>
								<div class="col-lg-9">
							<input type="text" class="form-control input-sm" data-type="email" placeholder="Email Address">
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /form-group -->
					</div>
					<div class="field_row clearfix">    
						<div class="form-group">
							<label class="control-label col-lg-3">Fax</label>
								<div class="col-lg-9">
							<input type="text" class="form-control input-sm" data-type="url" placeholder="Url">								<div class="seperator"></div>
							<div class="seperator"></div>
						</div><!-- /.col -->
						</div><!-- /form-group -->
					</div>
					<div class="field_row clearfix">    
						<div class="form-group">
							<label class="control-label col-lg-3">Website</label>
							<div class="col-lg-9">
						<input type="text" class="form-control input-sm" data-type="urlstrict" placeholder="http://yourSite.com">						<div class="seperator"></div>
						<div class="seperator"></div>
						</div><!-- /.col -->
							</div><!-- /form-group -->
							</div>
							
						<div class="field_row clearfix">    
						<div class="form-group">
							<label class="col-lg-2 control-label">Language</label>											
								<div class="col-lg-10">
									<select class="form-control">
										<option>english
										<option>spanish
										<option>russian
										<option>dutch
										<option>chinese
										<option>indonesian
										<option>french
										<option>thai
									</select>
									<div class="seperator"></div>
									<div class="seperator"></div>
								</div><!-- /.col -->
							</div><!-- /form-group -->
							</div>
							
							<div class="field_row clearfix">	
							<div class="form-group">
							<label class="col-lg-2 control-label">Time zone</label>
							<div class="col-lg-10">
							<select class="form-control">
							<option>(GMT-11:00) Midway Island, Samoa',
							<option>(GMT-10:00) Hawaii-Aleutian',
							<option>(GMT-10:00) Hawaii',
							<option>(GMT-09:30) Marquesas Islands',
							<option>(GMT-09:00) Gambier Islands',
							<option>(GMT-09:00) Alaska',
							<option>(GMT-08:00) Tijuana, Baja California',
							<option>(GMT-08:00) Pitcairn Islands',
							<option>(GMT-08:00) Pacific Time (US & Canada)',
							<option>(GMT-07:00) Mountain Time (US & Canada)',
							<option>(GMT-07:00) Chihuahua, La Paz, Mazatlan',
							<option>(GMT-07:00) Arizona',
							<option>(GMT-06:00) Saskatchewan, Central America',
							<option>(GMT-06:00) Guadalajara, Mexico City, Monterrey',
							<option>(GMT-06:00) Easter Island',
							<option>(GMT-06:00) Central Time (US & Canada)',
							<option>(GMT-05:00) Eastern Time (US & Canada)',
							<option>(GMT-05:00) Cuba',
							<option>(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
							<option>(GMT-04:30) Caracas',
							<option>(GMT-04:00) Santiago',
							<option>(GMT-04:00) La Paz',
							<option>(GMT-04:00) Faukland Islands',
							<option>(GMT-04:00) Brazil',
							<option>(GMT-04:00) Atlantic Time (Goose Bay)',
							<option>(GMT-04:00) Atlantic Time (Canada)',
							<option>(GMT-03:30) Newfoundland',
							<option>(GMT-03:00) UTC-3',
							<option>(GMT-03:00) Montevideo',
							<option>(GMT-03:00) Miquelon, St. Pierre',
							<option>(GMT-03:00) Greenland',
							<option>(GMT-03:00) Buenos Aires',
							<option>(GMT-03:00) Brasilia',
							<option>(GMT-02:00) Mid-Atlantic',
							<option>(GMT-01:00) Cape Verde Is.',
							<option>(GMT-01:00) Azores',
							<option>(GMT) Greenwich Mean Time : Belfast',
							<option>(GMT) Greenwich Mean Time : Dublin',
							<option>(GMT) Greenwich Mean Time : Lisbon',
							<option>(GMT) Greenwich Mean Time : London',
							<option>(GMT) Monrovia, Reykjavik',
							<option>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
							<option>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
							<option>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
							<option>(GMT+01:00) West Central Africa',
							<option>(GMT+01:00) Windhoek',
							<option>(GMT+02:00) Beirut',
							<option>(GMT+02:00) Cairo',
							<option>(GMT+02:00) Gaza',
							<option>(GMT+02:00) Harare, Pretoria',
							<option>(GMT+02:00) Jerusalem',
							<option>(GMT+02:00) Minsk',
							<option>(GMT+02:00) Syria',
							<option>(GMT+03:00) Moscow, St. Petersburg, Volgograd',
							<option>(GMT+03:00) Nairobi',
							<option>(GMT+03:30) Tehran',
							<option>(GMT+04:00) Abu Dhabi, Muscat',
							<option>(GMT+04:00) Yerevan',
							<option>(GMT+04:30) Kabul',
							<option>(GMT+05:00) Baku',/*GARRISON ADDED 4/20/2013*/
							<option>(GMT+05:00) Ekaterinburg',
							<option>(GMT+05:00) Tashkent',
							<option>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
							<option>(GMT+05:45) Kathmandu',
							<option>(GMT+06:00) Astana, Dhaka',
							<option>(GMT+06:00) Novosibirsk',
							<option>(GMT+06:30) Yangon (Rangoon)',
							<option>(GMT+07:00) Bangkok, Hanoi, Jakarta',
							<option>(GMT+07:00) Krasnoyarsk',
							<option>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
							<option>(GMT+08:00) Irkutsk, Ulaan Bataar',
							<option>(GMT+08:00) Perth',
							<option>(GMT+08:45) Eucla',
							<option>(GMT+09:00) Osaka, Sapporo, Tokyo',
							<option>(GMT+09:00) Seoul',
							<option>(GMT+09:00) Yakutsk',
							<option>(GMT+09:30) Adelaide',
							<option>(GMT+09:30) Darwin',
							<option>(GMT+10:00) Brisbane',
							<option>(GMT+10:00) Hobart',
							<option>(GMT+10:00) Vladivostok',
							<option>(GMT+10:30) Lord Howe Island',
							<option>(GMT+11:00) Solomon Is., New Caledonia',
							<option>(GMT+11:00) Magadan',
							<option>(GMT+11:30) Norfolk Island',
							<option>(GMT+12:00) Anadyr, Kamchatka',
							<option>(GMT+12:00) Auckland, Wellington',
							<option>(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
							<option>(GMT+12:45) Chatham Islands',
							<option>(GMT+13:00) Nuku\'alofa',
							<option>(GMT+14:00) Kiritimati'
							</select>
								<div class="seperator"></div>												
								<div class="seperator"></div>
								</form>
							</div><!-- /.col -->
							</div><!-- /form-group -->
							</div>
                        
			</div> <!panel body>
		</div><!panel>
	</div><!row>

<!-- GARRISON MODIFIED 4/13/2013 -->
<!-- END MODIFIED -->		
<div class="col-md-4">
<div class="panel panel-default">
	<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate="">
        <div class="panel-body">
		<div class="field_row clearfix">	
     <label class="col-lg-12 control-label">tax1 rate</label>
	 <div class="col-lg-8">
		<div class="row">
			<div class="col-lg-4">
			<input type="text" class="form-control" placeholder=".col-lg-4">
			</div><!-- /.col -->
		    <div class="col-lg-4">
			<input type="text" class="form-control" placeholder=".col-lg-4">
			<div class="seperator"></div>
		   </div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.col -->  
   </div>
   
   <div class="field_row clearfix">	
     <label class="col-lg-12 control-label">tax2 rate</label>
	 <div class="col-lg-8">
		<div class="row">
			<div class="col-lg-4">
			<input type="text" class="form-control" placeholder=".col-lg-4">
			</div><!-- /.col -->
		    <div class="col-lg-4">
			<input type="text" class="form-control" placeholder=".col-lg-4">
			<div class="seperator"></div>
		   </div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.col -->  
   </div>
   
 <div class="field_row clearfix">	
   <div class="form-group">
   <div>
		<label class="control-label col-lg-12">currency symbol</label>
		</div>
			<div class="col-lg-12">
				<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
				    <div class="seperator"></div>
						<label class="label-checkbox inline"></label>
					</div><!-- /.col -->
			</div><!-- /form-group -->
 </div>
       <div class="field_row clearfix">	
				<div class="form-group">
			<label class="control-label col-lg-3">Return policy</label>
			<div class="col-lg-9">
			<textarea class="form-control" rows="3"></textarea>
			<div class="seperator"></div>							
			<div class="seperator"></div>
             </div><!-- /.col -->
		</div><!-- /form-group -->
		
	<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-6">stock location</label>
							<div class="col-lg-6">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div><label class="control-label col-lg-6">print reciept after sale:</label>
</div>
</form>
</div>
</div>
</div>
</div><!end of 2>

<div class="col-md-4">
<div class="panel panel-default">
        <div class="panel-body">
<div class="field_row clearfix">    
<div class="form-group">
						<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate="">
						<label class="control-label col-lg-12">custom field1</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field2</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field3</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field4</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field5</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field6</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field7</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field8</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field9</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
</div>
<div class="field_row clearfix">    
<div class="form-group">
						<label class="control-label col-lg-12">custom field10</label>
							<div class="col-lg-12">
						<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
							<div class="seperator"></div>
							<label class="label-checkbox inline"></label>
						</div><!-- /.col -->
					</div><!-- /form-group -->
					
</div>
<div>	
<button type="submit" class="btn btn-sm btn-success">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div><!>
</div><!-- /main-container -->
	</div><!-- /wrapper -->
<?php $this->load->view("partial/footer"); ?>
