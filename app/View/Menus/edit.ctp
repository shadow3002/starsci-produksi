		<div class="row">
		<div class="panel1">
		<div id="iner1">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Menu Name'));
		echo $this->Form->input('url', array('label' => 'URL'));
		echo $this->Form->input('controller', array('label' => 'Controller Menu'));
		echo $this->Form->input('action', array('label' => 'Action'));
		echo $this->Form->input('menu_category_id');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
