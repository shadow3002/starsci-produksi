<div id="borderone">
	<div id="iner1">
	<?php
	$this->Html->css(array('print'), 'stylesheet', array('media' => 'print'));
	?>
	<a href='javascript:printContent("iner1")' id='print_link'><?php __('Print');?></a> </div>
	<?php echo $this->Html->image('starsci.png', array('height' => '229px', 'width'=>'900px')); ?>
	<?php echo 'CERTIFICATE OF ANALYSIS'; ?>
	<br>
	<table>
		<tr>
			<td><?php echo __('No Coa'); ?></td>
			<td><?php echo h($printcoa['Printcoa']['nocoa']); ?></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
		<td><?php echo __('Nama Produk'); ?></td>
		<td><?php echo($printcoa['Printcoa']['namaproduk']); ?></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
		<td><?php echo('Lot No'); ?></td>
		<td><?php echo($printcoa['Printcoa']['lotno']); ?></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
		<td><?php echo('Tanggal Tes'); ?></td>
		<td><?php echo($printcoa['Printcoa']['tanggaltes']); ?></td>
		</tr>
	</table>
	<div id="borderone">
	<table>
		<thead>
		<tr>
		<td><?php echo 'Test Point/Test Method'; ?></td>
		<td><?php echo 'Unit'; ?></td>
		<td><?php echo 'Requirements';  ?></td>
		<td><?php echo 'Result'; ?></td>
		<td><?php echo 'Keterangan'; ?></td>
		</tr>
		</thead>
		<tr>
		<td><?php echo 'Appearance'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['appunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['appreq']); ?>></td>
		<td><?php echo h($printcoa['Printcoa']['appresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['appket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Product Colour'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['produkunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['produkreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['produkresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['produkket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Refraction Index'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['refracunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['refracreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['refracresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['refracket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Ph of Product'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['phunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['phreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['phresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['phket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Total Solid Content(TSC)'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['tscunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tscreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tscresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tscket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Free Formaldehide Content'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['freeunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['freereq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['freeresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['freeket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Triazine Content'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['triziunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['trizireq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['triziresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['triziket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Viscosity'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['viscounit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['viscoreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['viscoresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['viscoket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Solubility in Water'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['solunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['solreq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['solresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['solket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Density'; ?> </td>
		<td><?php echo h($printcoa['Printcoa']['densiunit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['densireq']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['densiresults']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['densiket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Nama tambah 1 : ', h($printcoa['Printcoa']['namatmbh1']);?><br><?php echo ' Method tambah 1 : ', ($printcoa['Printcoa']['methodtmbh1']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh1unit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh1req']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh1results']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh1ket']); ?></td>
		</tr>
		<tr>
		<td><?php echo 'Nama tambah 2 : ', h($printcoa['Printcoa']['namatmbh2']);?><br> <?php echo ' Method tambah 2 : ', ($printcoa['Printcoa']['methodtmbh2']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh2unit']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh2req']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh2results']); ?></td>
		<td><?php echo h($printcoa['Printcoa']['tmbh2ket']); ?></td>
		</tr>
		<thead>
		<tr>
		<td colspan = "5"></td>
		</tr>
		</thead>
		</table>
		</div>
<div id="right">
		<?php echo 'Cikarang, ', $today;?>
		<br><br><br><br><br><br>
</div>
<div id="right1">
		<?php echo 'OC LABORATORY'; ?>
</div>
	</div>
</div>
