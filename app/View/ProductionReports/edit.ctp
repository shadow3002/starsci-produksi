		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionReport'); ?>
	<fieldset>
		<legend><?php echo __('Edit Production Report'); ?></legend>
	<?php
		echo $this->Form->input('no_kp', array());
		echo $this->Form->input('product_id', array('style' =>'width:20%'));
		echo $this->Form->input('production_category_id', array('style' =>'width:20%'));
		echo $this->Form->input('lot_number', array());
		echo $this->Form->input('standart_quantity', array());
		echo $this->Form->input('actual_quantity', array());
		echo $this->Form->input('note', array());
		echo $this->Form->input('qc_passed_qty', array());
		echo $this->Form->input('qc_rejected_qty', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>