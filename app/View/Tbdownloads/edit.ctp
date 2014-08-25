		<div class="row">
		<div class="panel">
		<div id="iner1">

		<?php echo $this->Form->create('Tbdownload', array('type' => 'file')); ?>
			<fieldset>
				<legend><?php echo __('Edit MSDS'); ?></legend>
			<?php
				echo $this->Form->input('namaproduk', array('label' => 'Products Name'));
				echo $this->Form->input('tbdownload_category_id', array('label' => 'Category'));
				echo $this->Form->input('namafiledoc', array('type' => 'file', 'label' => '.doc'));
				echo $this->Form->input('namafilepdf', array('type' => 'file', 'label' => '.pdf'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>

</div>
</div>
</div>