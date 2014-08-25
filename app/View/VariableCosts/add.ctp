		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('VariableCost'); ?>
	<fieldset>
		<legend><?php echo __('Add Variable Cost'); ?></legend>
	<?php
		echo $this->Form->input('variable_cost_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
