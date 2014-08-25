<div class="row">
	<div class="panel">
		<div id="iner1">
	<?php echo $this->Form->create('Formulation'); ?>
	<div style="text-align:center">
	<table cellpadding="0" cellspacing="0" width='80%'>
				<tr>
				<td colspan='3'>
				<h3><center><?php echo __('Search'); ?></center>&nbsp;</h3>
				</td>
				</tr>
				<tr>
					<td>
					<?php
						echo $this->Form->input('production_card_id');
					?>
					</td>
				</tr>
				<tr>
					<center><td colspan='3'><?php echo $this->Form->end('Submit', array('style' =>'width:25%')); ?></td></center>
				</tr>
	</table>
</div>


<?php if(!empty($this->request->data['Formulation']['production_card_id'])):  ?>
	
	<a href='#' class='print' rel="content">Print</a>
	<div id = "content">
	<?php echo $this->Html->script('jquery-1.10.2'); ?>
	<?php echo $this->Html->script('jquery.PrintArea'); ?>
	<?php echo $this->Html->script('core'); ?>
	
	<table width = '100%' style = 'text-align:left'>
		<tr>
		<td colspan ='11' style='text-align:center'>Kartu Produksi</td>
		</tr>
		<?php foreach ($productioncard as $production): ?>
			<?php $kp = ($production['ProductionCard']['code']); ?>
			<?php $produk = ($production['ProductionCard']['product_name']); ?>
			<?php $stdbatch = ($production['ProductionCard']['standard_batch']); ?>
			<?php $lotno = ($production['ProductionCard']['lot_no']); ?>
			<?php $status = ($production['ProductionStatus']['name']); ?>
			<?php $time = ($production['ProductionCard']['production_time']); ?>
			<?php $date = ($production['ProductionCard']['create_date']); ?>
			<?php $nitrogen = ($production['ProductionCard']['nitrogen']); ?>
			<?php $reactor = ($production['Reactor']['name']); ?>
		<?php endforeach; ?>
		<tr>
			<td colspan = '3'>Nomor KP</td>
			<td><?php echo $kp; ?></td>
			<td></td>
			<td></td>
			<td>Status Produksi</td>
			<td><?php echo $status; ?></td>
		</tr>
		<tr>
			<td colspan = '3'>Nama Finished Produk</td>
			<td><?php echo $produk; ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan = '3'>Standard Batch</td>
			<td><?php echo $stdbatch; ?></td>
			<td></td>
			<td></td>
			<td>Vessel / Reactor</td>
			<td><?php echo $reactor; ?></td>
		</tr>
		<tr>
			<td colspan = '3'>Lot No</td>
			<td><?php echo $lotno; ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		
		<tr>
			<td colspan = '3'>Tanggal Produksi</td>
			<td><?php echo date('d-m-Y', strtotime(substr($date, 0, 10))); ?></td>
			<td></td>
			<td></td>
			<td>Waktu Proses</td>
			<td><?php echo $time; ?></td>
		</tr>
		<tr>
			<td colspan = '3'></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Nitrogen</td>
			<td><?php echo $nitrogen; ?></td>
		</tr>
		<tr>
			<td colspan = '11'><hr></td>
		</tr>
		
		<tr>
			<td>No</td>
			<td>Uraian</td>
			<td>Percentage</td>
			<td>STD</td>
			<td>Satuan</td>
			<td>Actual</td>
			<td>Satuan</td>
			<td>Selisih</td>
			<td>Satuan</td>
			<td>Keterangan</td>
		</tr>
		<tr>
			<td></td>
			<td>Raw Material</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	<?php $i = 0; ?>
	<?php foreach ($formulations as $formulation): ?>
	<tr>
		<?php
		$i = $i + 1; 
		$standard[$i] = $formulation['Formulation']['std'];
		?>
		<td><?php echo $i; ?></td>
		<td><?php echo h($formulation['Formulation']['raw_material']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['percentage']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['std']); ?>&nbsp;</td>
		<td><?php echo 'KG' ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['actual']); ?>&nbsp;</td>
		<td><?php echo 'KG' ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['selisih']); ?>&nbsp;</td>
		<td><?php echo 'KG' ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['note']); ?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
		<tr>
			<td colspan = '2'>Total STD Quantity</td>
			<td></td>
			<td><?php echo (array_sum($standard)/count($standard)); ?></td>
			<td>KG</td>
			<td></td>
			<td>KG</td>
			<td></td>
			<td>KG</td>
			<td></td>
		</tr>	
		<tr>
			<td colspan = '2'>Total Actual Produksi / Yield</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>KG</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan = '2'>Selisih</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>KG</td>
			<td></td>
		</tr>
		
		<tr>
		<td colspan = '11'><hr></td>
		</tr>
		<tr>
			<td colspan = '2'>Kemasan</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		
		<?php $j = 0; ?>
		<?php foreach ($packaging as $pack): ?>
		<tr>		
			<?php
			$j = $j + 1; 
			$standard[$j] = $pack['Packaging']['std'];
			?>
			<td><?php echo $j; ?></td>
			<td><?php echo h($pack['Pack']['name']); ?>&nbsp;</td>
			<td></td>
			<td><?php echo h($pack['Packaging']['std']); ?>&nbsp;</td>

			<td><?php echo 'PCS' ?>&nbsp;</td>
			<td><?php echo h($pack['Packaging']['actual']); ?>&nbsp;</td>
			<td><?php echo 'PCS' ?>&nbsp;</td>
			<td></td>
			<td><?php echo 'PCS' ?>&nbsp;</td>
			<td><?php echo h($pack['Packaging']['note']); ?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
		
		<tr>
			<td colspan = '2'>Quality Product</td>
			<td>Passed</td>
			<td></td>
			<td></td>
			<td></td>
			<td>Rejected</td>
		</tr>
	
	</table>
	<table width = '100%'>
		<tr>
			<td>Proses Produksi Oleh</td>
			<td>Dibuat Oleh</td>
			<td>Qc. disetujui Oleh</td>
			<td>Produksi disetujui Oleh</td>
		</tr>
		<tr>
			<td colspan = '4'>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</td>
		</tr>
		<tr>
			<td>(......................................)</td>
			<td>(......................................)</td>
			<td>(......................................)</td>
			<td>(......................................)</td>
		</tr>
		<tr>
			<td>Operator Produksi</td>
			<td>Supervisor Produksi</td>
			<td>Quality Control</td>
			<td>Production Manager</td>
	</table>
	</div>
<?php endif; ?>
		</div>
	</div>
</div>