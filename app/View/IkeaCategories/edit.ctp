	<div class="row">
		<div class="panel1">
		<div id="iner1">
<?php echo $this->Form->create('IkeaCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ikea Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
