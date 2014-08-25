		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Apeofree', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Apeofree'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('apeofree_category_id');
		echo $this->Form->input('namafiledoc', array('type' => 'file', 'label'=>'.doc'));
		echo $this->Form->input('namafilepdf', array('type' => 'file', 'label'=>'.pdf'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
</div>
</div>