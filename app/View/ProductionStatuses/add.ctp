		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Production Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
