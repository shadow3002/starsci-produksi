		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Production Schedule'); ?></legend>
	<?php
		echo $this->Form->input('shift_id', array('empty' => '--- Select Shift ---', 'style' =>'width:20%'));
		echo $this->Form->input('product_id', array('empty' => '--- Select Product ---', 'style' =>'width:20%'));
		echo $this->Form->input('reactor_id', array('empty' => '--- Select Reactor ---', 'style' =>'width:20%'));
		$week = array('1' =>'1',
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'5' => '5');
		echo $this->Form->input('week', array('empty' => '--- Select Week ---', 'style' =>'width:20%', 'options' => $week));
		echo $this->Form->input('lot_no', array());
		echo $this->Form->input('note', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
