		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('GroupMenu'); ?>
	<fieldset>
		<legend><?php echo __('Add Group Menu'); ?></legend>
		
	<?php
		echo $this->Form->input('menu_category_id');
		echo $this->Form->input('group_user_id');
		echo $this->Form->input('menu_id');
	?>
	</fieldset>
	<div id="iner3">
<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
</div>
</div>
