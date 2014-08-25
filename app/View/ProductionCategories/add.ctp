		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Production Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
