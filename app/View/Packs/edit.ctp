		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Pack'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pack'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('packaging_code');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>