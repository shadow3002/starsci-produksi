		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('raw_material');
		echo $this->Form->input('percentage');
		echo $this->Form->input('product_id');
		echo $this->Form->input('create_by');
		echo $this->Form->input('create_date');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('modified_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
