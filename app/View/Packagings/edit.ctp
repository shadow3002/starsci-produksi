		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Packaging'); ?>
	<fieldset>
		<legend><?php echo __('Edit Packaging'); ?></legend>
	<?php
		echo $this->Form->input('pack_id', array('style' =>'width:20%'));
		echo $this->Form->input('production_card_id', array('style' =>'width:20%'));
		echo $this->Form->input('std', array());
		echo $this->Form->input('actual', array());
		echo $this->Form->input('note', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>