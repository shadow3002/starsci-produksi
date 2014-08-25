		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirmation', array('type'=>'password'));
		echo $this->Form->input('group_user_id');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
</div>
</div>