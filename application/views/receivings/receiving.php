<?php $this->load->view("partial/header"); ?>

<div id="page_title" style="margin-bottom:8px;">
<label class="control-label col-lg-12"><h1><center>
<?php echo $this->lang->line('recvs_register'); ?></center></h1></label></div>

<?php
if(isset($error))
{
	echo "<div class='error_message'>".$error."</div>";
}
?>
<div class="row">
<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-body">					
			<div id="register_wrapper">
				<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate="">
					<label class="control-label">
					<?php echo form_open("receivings/change_mode",array('id'=>'mode_form')); ?></label>
					<span><label class="control-label col-lg-6">
					<?php echo $this->lang->line('recvs_mode') ?></label></span>
					<button class="btn btn-default dropdown-toggle col-lg-6" type="button" id="dropdownMenu1" data-toggle="dropdown">		
					<?php echo form_dropdown('mode',$modes,$mode,'onchange="$(\'#mode_form\').submit();"'); ?></button>
					
	
							<?php 
							if ($show_stock_locations) 
							{
							?>
							<span><?php echo $this->lang->line('recvs_stock_source') ?></span>
							<?php echo form_dropdown('stock_source',$stock_locations,$stock_source,'onchange="$(\'#mode_form\').submit();"'); ?>
							<?php 
							if($mode=='requisition')
							{
							?>
							<span><?php echo $this->lang->line('recvs_stock_destination') ?></span>
							<?php echo form_dropdown('stock_destination',$stock_locations,$stock_destination,'onchange="$(\'#mode_form\').submit();"');        
							}
							}
							?>    
							<div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
		
						<?php echo form_open("receivings/add",array('id'=>'add_item_form')); ?>
						<label class="control-label col-lg-6" id="item_label" for="item">
						<?php
						if($mode=='receive' or $mode=='requisition')
						{
							echo $this->lang->line('recvs_find_or_scan_item',array('class'=>'wide'));
						}
						else
						{
							echo $this->lang->line('recvs_find_or_scan_item_or_receipt',array('class'=>'wide'));
						}
						?>
						</label>
						
						<div class="col-lg-6">
						<?php echo form_input(array('name'=>'item','id'=>'item','size'=>'40','class' => 'form-control input-sm bounceIn animation-delay2'));?></div>
						<div class="btn btn-sm btn-info" id="new_item_button_register" >
							<?php echo anchor("items/view/-1/width:360",
							"<div class='small_button'><span>".$this->lang->line('sales_new_item')."</span></div>",								array('class'=>'thickbox none','title'=>$this->lang->line('sales_new_item')));
						?>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>

<!-- Receiving Items List -->

						<table class="table table-bordered table-condensed table-hover table-striped col-lg-12" id="register">
						<thead>
						<tr>
								<th style="width:11%;"><label class="control-label"><?php echo $this->lang->line('common_delete'); ?></label></th>
								<th style="width:30%;"><label class="control-label"><?php echo $this->lang->line('recvs_item_name'); ?></label></th>
								<th style="width:11%;"><label class="control-label"><?php echo $this->lang->line('recvs_cost'); ?></label></th>
								<th style="width:11%;"><label class="control-label"><?php echo $this->lang->line('recvs_quantity'); ?></label></th>
								<th style="width:11%;"><label class="control-label"><?php echo $this->lang->line('recvs_discount'); ?></label></th>
								<th style="width:15%;"><label class="control-label"><?php echo $this->lang->line('recvs_total'); ?></label></th>
								<th style="width:11%;"><label class="control-label"><?php echo $this->lang->line('recvs_edit'); ?></label></th>
						</tr>
						</thead>
						<tbody id="cart_contents.table-striped">
						<?php
						if(count($cart)==0)
						{
						?>
						<tr><td colspan='7'>
						<div class='label label-warning' style='padding:7px;'><?php echo $this->lang->line('sales_no_items_in_cart'); ?></div>
						</tr></tr>
						<?php
						}
						else
						{
							foreach(array_reverse($cart, true) as $line=>$item)
							{
								echo form_open("receivings/edit_item/$line");
								
						?>
								<tr>
								<td><button type="submit" class="btn btn-success btn-sm"><?php echo anchor("receivings/delete_item/$line",'['.$this->lang->line('common_delete').']');?></button></td>
								<td style="align:center;"><label class="control-label"><?php echo $item['name']; ?></label></br> <label class="control-label"> [<?php echo $item['in_stock']; ?> in <?php echo $item['stock_name']; ?>]</label></td>
									<?php echo form_hidden('location', $item['item_location']); ?>

						<?php
									echo $item['description'];
									echo form_hidden('description',$item['description']);
						?>

						<?php       if ($items_module_allowed && !$mode=='requisition')
									{
						?>
									 <td><?php echo form_input(array('name'=>'price','value'=>$item['price'],'size'=>'6'));?></td>
						<?php
									}
									else
									{
						?>
									 <td><?php echo $item['price']; ?></td>
									 <?php echo form_hidden('price',$item['price']); ?>
						<?php
									}
						?>
								<td>
						<?php
									echo form_input(array('name'=>'quantity','value'=>$item['quantity'],'size'=>'2'));
						?>
								</td>
								
						<?php       if ($items_module_allowed && !$mode=='requisition')
									{
						?>
									<td><?php echo form_input(array('name'=>'discount','value'=>$item['discount'],'size'=>'3'));?></td>
						<?php
									}
									else
									{
						?>
									 <td><?php echo $item['discount']; ?></td>
									 <?php echo form_hidden('discount',$item['discount']); ?>
						<?php
									}
						?>
								<td><label class="control-label"><?php echo to_currency($item['price']*$item['quantity']-$item['price']*$item['quantity']*$item['discount']/100); ?></label></td>
							  
							  <td><button type="submit" class="btn btn-success btn-sm"><?php echo form_submit("edit_item", $this->lang->line('sales_edit_item'));?></table></td>
								</tr>
								
								
						<?php
							}
						}
						?>
						</tbody>
						</table>
			</form>		
			</div>
		</div>
	</div>
</div>
<!-- Overall Receiving -->
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate="">
					<div id="overall_sale">
						<?php
						if(isset($supplier))
						{
							echo $this->lang->line("recvs_supplier").': <b>'.$supplier. '</b><br />';
							echo anchor("receivings/delete_supplier",'['.$this->lang->line('common_delete').' '.$this->lang->line('suppliers_supplier').']');
						}
						else
						{
							echo form_open("receivings/select_supplier",array('id'=>'select_supplier_form')); ?>
							<div class="form-group">
							<label class="control-label col-lg-4" id="supplier_label" for="supplier"><?php echo $this->lang->line('recvs_select_supplier'); ?></label>
							<div class="col-lg-12">
							<?php echo form_input(array('name'=>'supplier','id'=>'supplier','size'=>'30','value'=>$this->lang->line('recvs_start_typing_supplier_name'),'class' => 'form-control input-sm bounceIn animation-delay2'));?>
							</div>
							<div style="margin-top:5px;text-align:center;">
							<div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
							</div>
							</div>
							
								<h3 style="margin: 5px 0 5px 0"><?php echo $this->lang->line('common_or'); ?></h3>

								<button type="submit" class="btn btn-success btn-sm">
						<?php echo anchor("suppliers/view/-1/width:350",
						"<div style='margin:0 auto;'><span>".$this->lang->line('recvs_new_supplier')."</span></div>",
						array('class'=>'thickbox none','title'=>$this->lang->line('recvs_new_supplier')));
						?></button>
						</div>
						<div class="clearfix">&nbsp;</div>
					<?php
						}
					?>

					<?php
						if($mode != 'requisition')
						{
							
					  ?>
					<div id='sale_details'>
						<div class="float_left" style='width:55%;'><?php echo $this->lang->line('sales_total'); ?>:</div>
						<div class="float_left" style="width:45%;font-weight:bold;"><?php echo to_currency($total); ?></div>
					</div>
					
					<?php
					}
					?>
    
						<?php
						if(count($cart) > 0)
						{
							if($mode == 'requisition')
							{
						?>
						
						<div  style='border-top:2px solid #000;' />
						<div id="finish_sale">
							<?php echo form_open("receivings/requisition_complete",array('id'=>'finish_sale_form')); ?>
							<br />
							<label class="control-label" id="comment_label" for="comment"><?php echo $this->lang->line('common_comments'); ?>:</label>
							<?php echo form_textarea(array('name'=>'comment','value'=>'','rows'=>'4','cols'=>'23'));?>
							<br /><br />
							
							<?php echo "<div class='small_button' id='finish_sale_button' style='float:right;margin-top:5px;'><span>".$this->lang->line('recvs_complete_receiving')."</span></div>";
							?>
							</div>
							    
							<?php echo form_open("receivings/cancel_receiving",array('id'=>'cancel_sale_form')); ?>
							<div class='small_button' id='cancel_sale_button' style='float:left;margin-top:5px;'>
							<span>Cancel </span>
							</div>
							
						 
						<?php
							}
							else
							{
						?>
						
					<div id="finish_sale">
						<?php echo form_open("receivings/complete",array('id'=>'finish_sale_form')); ?>
							<br />
							<label class="control-label" id="comment_label" for="comment"><?php echo $this->lang->line('common_comments'); ?>:</label>
							<div class="control-label">
							<?php echo form_textarea(array('name'=>'comment','value'=>'','rows'=>'4','cols'=>'23','class' => 'form-control input-sm bounceIn animation-delay2'));?><br /><br /></div>
				
						<table width="100%">
							<tr><td>
								<div class="control-label">
								<?php
								echo $this->lang->line('sales_payment').':   ';?>
								</td><td></div>
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">		
							<?php
								echo form_dropdown('payment_type',$payment_options);?></button>
							</td></tr>

								<tr>
								<td>
								<?php
									echo $this->lang->line('sales_amount_tendered').':   ';?>
								</td>
								<td>
								<div class="control-label">
								<?php
									echo form_input(array('name'=>'amount_tendered','value'=>'','size'=>'10','class' => 'form-control input-sm bounceIn animation-delay2'));
								?></div>
								</td>
								</tr>

						</table>
		
						<br /><button type="submit"  class="btn btn-success btn-sm" style="float:right;">
						<?php echo "<div  id='finish_sale_button' style='float:right;margin-top:5px;'><span>".$this->lang->line('recvs_complete_receiving')."</span></div>";
						?></button>
						

						<?php echo form_open("receivings/cancel_receiving",array('id'=>'cancel_sale_form')); ?>
						<div id='cancel_sale_button' style='float:left;margin-top:5px;'>
							<span><button type="submit" class="btn btn-success btn-sm">Cancel</button> </span>
						</div>
        
		
							<?php
							}
						}
							?>

					</div>
							<div class="clearfix" style="margin-bottom:30px;">&nbsp;</div>

</form>
</div>
</div>
</div>
</div>
<?php $this->load->view("partial/footer"); ?>


<script type="text/javascript" language="javascript">
$(document).ready(function()
{
    $("#item").autocomplete('<?php echo site_url("receivings/item_search"); ?>',
    {
    	minChars:0,
    	max:100,
       	delay:10,
       	selectFirst: false,
    	formatItem: function(row) {
			return row[1];
		}
    });

    $("#item").result(function(event, data, formatted)
    {
		$("#add_item_form").submit();
    });

	$('#item').focus();

	$('#item').blur(function()
    {
    	$(this).attr('value',"<?php echo $this->lang->line('sales_start_typing_item_name'); ?>");
    });

	$('#item,#supplier').click(function()
    {
    	$(this).attr('value','');
    });

    $("#supplier").autocomplete('<?php echo site_url("receivings/supplier_search"); ?>',
    {
    	minChars:0,
    	delay:10,
    	max:100,
    	formatItem: function(row) {
			return row[1];
		}
    });

    $("#supplier").result(function(event, data, formatted)
    {
		$("#select_supplier_form").submit();
    });

    $('#supplier').blur(function()
    {
    	$(this).attr('value',"<?php echo $this->lang->line('recvs_start_typing_supplier_name'); ?>");
    });

    $("#finish_sale_button").click(function()
    {
    	if (confirm('<?php echo $this->lang->line("recvs_confirm_finish_receiving"); ?>'))
    	{
    		$('#finish_sale_form').submit();
    	}
    });

    $("#cancel_sale_button").click(function()
    {
    	if (confirm('<?php echo $this->lang->line("recvs_confirm_cancel_receiving"); ?>'))
    	{
    		$('#cancel_sale_form').submit();
    	}
    });


});

function post_item_form_submit(response)
{
	if(response.success)
	{
		$("#item").attr("value",response.item_id);
		$("#add_item_form").submit();
	}
}

function post_person_form_submit(response)
{
	if(response.success)
	{
		$("#supplier").attr("value",response.person_id);
		$("#select_supplier_form").submit();
	}
}

</script>