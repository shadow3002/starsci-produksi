<div class="printcoas form">
<?php echo $this->Form->create('Printcoa'); ?>
	<fieldset>
		<legend><?php echo __('Add Printcoa'); ?></legend>
	<?php
		echo $this->Form->input('nocoa');
		echo $this->Form->input('namaproduk');
		echo $this->Form->input('lotno');
		echo $this->Form->input('tanggaltes');
		echo $this->Form->input('appunit');
		echo $this->Form->input('appreq');
		echo $this->Form->input('appresults');
		echo $this->Form->input('appket');
		echo $this->Form->input('produkunit');
		echo $this->Form->input('produkreq');
		echo $this->Form->input('produkresults');
		echo $this->Form->input('produkket');
		echo $this->Form->input('refracunit');
		echo $this->Form->input('refracreq');
		echo $this->Form->input('refracresults');
		echo $this->Form->input('refracket');
		echo $this->Form->input('phunit');
		echo $this->Form->input('phreq');
		echo $this->Form->input('phresults');
		echo $this->Form->input('phket');
		echo $this->Form->input('tscunit');
		echo $this->Form->input('tscreq');
		echo $this->Form->input('tscresults');
		echo $this->Form->input('tscket');
		echo $this->Form->input('freeunit');
		echo $this->Form->input('freereq');
		echo $this->Form->input('freeresults');
		echo $this->Form->input('freeket');
		echo $this->Form->input('triziunit');
		echo $this->Form->input('trizireq');
		echo $this->Form->input('triziresults');
		echo $this->Form->input('triziket');
		echo $this->Form->input('viscounit');
		echo $this->Form->input('viscoreq');
		echo $this->Form->input('viscoresults');
		echo $this->Form->input('viscoket');
		echo $this->Form->input('solunit');
		echo $this->Form->input('solreq');
		echo $this->Form->input('solresults');
		echo $this->Form->input('solket');
		echo $this->Form->input('densiunit');
		echo $this->Form->input('densireq');
		echo $this->Form->input('densiresults');
		echo $this->Form->input('densiket');
		echo $this->Form->input('namatmbh1');
		echo $this->Form->input('methodtmbh1');
		echo $this->Form->input('tmbh1unit');
		echo $this->Form->input('tmbh1req');
		echo $this->Form->input('tmbh1results');
		echo $this->Form->input('tmbh1ket');
		echo $this->Form->input('namatmbh2');
		echo $this->Form->input('methodtmbh2');
		echo $this->Form->input('tmbh2unit');
		echo $this->Form->input('tmbh2req');
		echo $this->Form->input('tmbh2results');
		echo $this->Form->input('tmbh2ket');
		echo $this->Form->input('create_date');
		echo $this->Form->input('create_by');
		echo $this->Form->input('update_date');
		echo $this->Form->input('update_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Printcoas'), array('action' => 'index')); ?></li>
	</ul>
</div>
