		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Shift'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shift'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
