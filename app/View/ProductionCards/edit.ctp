		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionCard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Production Card'); ?></legend>
	<?php
		echo $this->Form->input('production_status_id', array('style' =>'width:20%'));
		echo $this->Form->input('reactor_id', array('style' =>'width:20%'));
		echo $this->Form->input('code', array());
		echo $this->Form->input('product_name', array());
		echo $this->Form->input('standard_batch', array());
		echo $this->Form->input('lot_no', array());
		echo $this->Form->input('production_time', array());
		echo $this->Form->input('nitrogen', array());
		echo $this->Form->input('note', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>