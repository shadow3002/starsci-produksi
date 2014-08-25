		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionCost'); ?>
	<fieldset>
		<legend><?php echo __('Edit Production Cost'); ?></legend>
	<?php
		$months = array('January' =>'January',
		'Febuary' =>'Febuary',
		'March' =>'March',
		'April' =>'April',
		'May' =>'May',
		'June' =>'June',
		'July' =>'July',
		'August' =>'August',
		'September' =>'September',
		'October' =>'October',
		'November' =>'November',
		'December' =>'December',
		);
		echo $this->Form->input('month', array('style' => 'width:20%', 'options' => $months));
		for($i = 2000;$i<=2100;$i++){
		$year[$i] = $i;
		}
		echo $this->Form->input('year', array('style' => 'width:20%', 'options' => $year));
		echo $this->Form->input('variable_cost_id', array('style' => 'width:20%', 'empty' =>'----- select value -----'));
		echo $this->Form->input('amount', array());
		echo $this->Form->input('note', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>