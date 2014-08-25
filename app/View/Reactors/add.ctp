		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Reactor'); ?>
	<fieldset>
		<legend><?php echo __('Add Reactor'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
