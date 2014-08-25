		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Coamaster'); ?>
	<fieldset>
		<legend><?php echo __('Add Coamaster'); ?></legend>
	<div style= "text-align:center">
	<?php
		echo $this->Form->input('nocoa', array('label'=>'No'));
		echo $this->Form->input('namaproduk', array('label'=>'Product Name'));
		echo $this->Form->input('lotno', array('label'=>'Lot No'));
		echo $this->Form->input('tanggaltes', array('label'=>'Testing Date'));
	?>
	</div>
	<table align='left' width='100%'>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('appearance', array('value' => 1, 'hiddenField' => false)); echo 'Appearance';?></td>
		</tr>
		<td><?php echo $this->Form->input('appunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('appreq', array('label'=>'Requirements')); ?> </td>
	</tr>
	<tr>
		<td> <?php echo $this->Form->input('appresults', array('label'=>'Results'));?> </td>
		<td> <?php echo $this->Form->input('appket', array('label'=>'Keterangan'));?> </td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('productcolour', array('value' => 1, 'hiddenField' => false)); echo 'Product Colour';?></td>
		</tr>
		<td><?php echo $this->Form->input('produkunit', array('label'=>'Unit')); ?> </td>
		<td><?php echo $this->Form->input('produkreq', array('label'=>'Requirements')); ?> </td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('produkresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('produkket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('refactionindex', array('value' => 1, 'hiddenField' => false)); echo 'Refaction Index';  ?></td>
		</tr>
		<td><?php echo $this->Form->input('refracunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('refracreq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('refracresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('refracket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('phofproduct', array('value' => 1, 'hiddenField' => false)); echo 'pH of Product';  ?></td>
		</tr>
		<td><?php echo $this->Form->input('phunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('phreq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('phresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('phket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('totalsolidcontent', array('value' => 1, 'hiddenField' => false)); echo 'Total Solid Content';  ?> </td>
		</tr>
		<td><?php echo $this->Form->input('tscunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('tscreq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('tscresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('tscket', array('label'=>'Keterangan')); ?> </td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('freeformaldehidecontent', array('value' => 1, 'hiddenField' => false)); echo 'Free Formaldehide Content'; ?></td>
		</tr>
		<td><?php echo $this->Form->input('freeunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('freereq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('freeresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('freeket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('triazinecontent', array('value' => 1, 'hiddenField' => false));  echo 'Triazine Content';  ?> </td>
		</tr>
		<td><?php echo $this->Form->input('triziunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('trizireq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('triziresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('triziket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('viscosity', array('value' => 1, 'hiddenField' => false)); echo 'Viscosity'; ?></td>
		</tr>
		<td><?php echo $this->Form->input('viscounit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('viscoreq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('viscoresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('viscoket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('solubilityinwater', array('value' => 1, 'hiddenField' => false)); echo 'Solubility in Water'; ?></td>
		</tr>
		<td><?php echo $this->Form->input('solunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('solreq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('solresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('solket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('density', array('value' => 1, 'hiddenField' => false)); echo 'Density'; ?></td>
		</tr>
		<td><?php echo $this->Form->input('densiunit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('densireq', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('densiresults', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('densiket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('tambahan1', array('value' => 1, 'hiddenField' => false)); echo 'Tambahan 1';  ?></td>
		</tr>
		<td><?php echo $this->Form->input('namatmbh1', array('label'=>'Nama Tambahan1')); ?></td>
		<td><?php echo $this->Form->input('methodtmbh1', array('label'=>'Method Tambahan1')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('tmbh1unit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('tmbh1req', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('tmbh1results', array('label'=>'Results')); ?> </td>
		<td><?php echo $this->Form->input('tmbh1ket', array('label'=>'Keterangan')); ?></td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<tr>
		<td><?php echo $this->Form->checkbox('tambahan2', array('value' => 1, 'hiddenField' => false)); echo 'Tambahan 2';  ?></td>
		</tr>
		<td><?php echo $this->Form->input('namatmbh2', array('label'=>'Nama Tambahan2')); ?></td>
		<td><?php echo $this->Form->input('methodtmbh2', array('label'=>'Method Tambahan2')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('tmbh2unit', array('label'=>'Unit')); ?></td>
		<td><?php echo $this->Form->input('tmbh2req', array('label'=>'Requirements')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->input('tmbh2results', array('label'=>'Results')); ?></td>
		<td><?php echo $this->Form->input('tmbh2ket', array('label'=>'Keterangan')); ?></td>
	</tr>
	</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
