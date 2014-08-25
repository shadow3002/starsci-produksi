		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Formulation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formulation'); ?></legend>
	<?php
		echo $this->Form->input('product_id', array('style' =>'width:20%'));
		echo $this->Form->input('production_card_id', array('style' =>'width:20%'));
		echo $this->Form->input('raw_material', array());
		echo $this->Form->input('percentage', array());
		echo $this->Form->input('std', array());
		echo $this->Form->input('actual', array());
		echo $this->Form->input('selisih', array());
		echo $this->Form->input('note', array());
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
