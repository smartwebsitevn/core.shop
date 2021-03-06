<?php $this->load->view('admin/plan/_common'); ?>

<!-- Main content wrapper -->
<div class="wrapper">
<!-- Form -->
	<form action="" class="form" id="form" method="post">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin'); ?>/images/icons/dark/pencil.png" class="titleIcon" />
					<h6><?php echo $this->lang->line('add'); ?> <?php echo $this->lang->line('mod_plan'); ?></h6>
				</div>

				<div class="formRow">
					<label class="formLeft" for="plan_name"><?php echo $this->lang->line('plan_name'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<input name="name" id="plan_name" value="<?php echo $info->name; ?>" type="text" />
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
			
			
			
				<!-- cost -->
				<div class="formRow">
					<label class="formLeft" for="param_cost">
						<?php echo lang('cost'); ?> 
						<span class="red">(<?php echo $currency->code; ?>)</span>:
						<span class="req">*</span>
					</label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="cost"  style='width:100px' id="param_cost" class="format_number" value="<?php echo $info->cost?>" _autocheck="true" type="text" />
							
						</span>
						<span name="cost_autocheck" class="autocheck"></span>
						<div name="cost_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_discount"><?php echo lang('discount'); ?>:<span class="req">*</span></label>
					<div class="formRight">
						<span>
						<input name="discount" id="param_discount"  type="text" class="left format_number"  style="width:100px;" value="<?php echo $info->discount?>"/>
						<select name="discount_type"  class="left" style="width:150px;margin-left:5px;height:22px">
							<?php foreach ($discount_types as $k => $v): ?>
								<option value="<?php echo $k; ?>" <?php echo form_set_select($k, $info->discount_type)?>>
									<?php echo lang('discount_type_'.$v); ?>
								</option>
							<?php endforeach; ?>
						</select>
						</span>
						<span name="discount_autocheck" class="autocheck"></span>
						<div name="discount_error" class="clear error"></div>
						<span name="discount_type_autocheck" class="autocheck"></span>
						<div name="discount_type_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				
				<div class="formRow">
					<label class="formLeft" for="day"><?php echo $this->lang->line('day'); ?>(ngày):<span class="req">*</span></label>
					<div class="formRight">
					    <span class='oneTwo'>
						<input name="day" id="day" type="text" value="<?php echo $info->day?>"/>
						</span>
						<div name="day_error" class="clear error"></div>
						<div class="note f11">Nếu nhập giá trị là <b class="req">0</b> sẽ xem mãi mãi</div>
					</div>
					<div class="clear"></div>
				</div>
			
			
				
           		<div class="formSubmit">
           			<input type="submit" value="<?php echo $this->lang->line('button_update'); ?>" class="redB" />
           			<input type="reset" value="<?php echo $this->lang->line('button_reset'); ?>" class="basic" />
           		</div>
        		<div class="clear"></div>
        		
			</div>
		</fieldset>
	</form>
	
</div>
