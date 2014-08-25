		<div class="row">
		<div class="panel">
		<div id="iner1">
		<?php echo $this->Form->create('ProductionSchedule'); ?>
	<table cellpadding="0" cellspacing="0" width='80%'>
				<tr>
				<td colspan='3'>
				<h3><center><?php echo __('Search'); ?></center>&nbsp;</h3>
				</td>
				</tr>
	<tr>
	<td>
	<?php
		$week = array('1' =>'1',
		'2' => '2',
		'3' => '3',
		'4' => '4',
		'5' => '5');
		echo $this->Form->input('week', array('options' => $week));
	?>
	</td>
	<td>
	<?php
		$months = array('01' =>'January',
		'02' =>'Febuary',
		'03' =>'March',
		'04' =>'April',
		'05' =>'May',
		'06' =>'June',
		'07' =>'July',
		'08' =>'August',
		'09' =>'September',
		'10' =>'October',
		'11' =>'November',
		'12' =>'December',
		);
		echo $this->Form->input('month', array('options' => $months));
	?></td>
	<td>
	<?php
		for($i = 2000;$i<=2100;$i++){
		$year[$i] = $i;
		}
		echo $this->Form->input('year', array('options' => $year));
	?>
	</td>
	</tr>
	<tr>
	<td colspan='3'><?php echo $this->Form->end(__('Submit')); ?></td>
	</tr>
</table>
	
	<?php if(!empty($this->request->data['ProductionSchedule']['week'])) : ?>
	<div id="view3" style='
	width:30%;
	display: inline-block;
	border-style:solid;
	border-color:black;
	float:left;'>
	<?php echo 'PT. STAR SPECIALTY CHEMICALS INDONESIA'; ?>
	<div style='text-align:left; margin-left: 50px;'><?php echo 'PRODUCTION PLANNING'; ?><br></div>	
	<?php $month = $this->request->data['ProductionSchedule']['month']; ?>
	<?php $year = $this->request->data['ProductionSchedule']['year']; ?>
	<?php echo 'PERIODE : '. $year.'-'. $month ; ?><br>
	</div>
	
	
	<div id="view3" style='
	display: inline-block;
	width:30%;
	border-style:solid;
	border-color:black;
	margin:1em;
	float:left;'>
	<?php echo 'Distribusi ke: Gudang, Laboratorium & Produksi'; ?>
	</div>
	
	<div id="view3" style='
	display: inline-block;
	width:10%;
	margin:1em;
	float:left;'>
	<?php $week = $this->request->data['ProductionSchedule']['week']; ?>
	<div style='border-style:solid;
	border-color:black;'>
	<?php echo 'Revisi: 0'; ?></div>
	<br>
	<?php echo 'Week: '. $week; ?>
	</div>
	
	
	<br>
	<br>
	<br>
	<br>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
	<td><?php echo 'Day / Date'; ?></td>
	<td><?php echo 'Shift'; ?></td>
	<td colspan = '50'>
	<?php echo 'Product Liquid'; ?>

	<br>
	<br>
	<br>
	
		<table cellpadding="0" cellspacing="0" style='border: none 0px #dddddd;'>
			<tr>
			<?php foreach ($reactors as $reactor): ?>
			<td>
			<?php echo ($reactor['Reactor']['name']); ?>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			</tr>
		</table>
	</td>
	<td><?php echo 'REMARKS'; ?></td>
	</tr>
	
	
	<tr>
	<td>
	<?php echo 'Senin'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Monday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>	
	
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	</tr>
	
	<tr>
	<td>
	<?php echo 'Selasa'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Tuesday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>
	
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>	
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
        
	</tr>
	
	<tr>
	<td>
	<?php echo 'Rabu'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Wednesday'){
				echo $tanggalbaru = $tanggal;
				
				}
	?>
	<?php endforeach; ?>
	</td>
	
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			
			</tr>
			<?php endforeach; ?>
			</table>
	</td>
	
	<?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	
	</tr>
	
	<tr>
	<td>
	<?php echo 'Kamis'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Thursday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>
	
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>	
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	</tr>
	
	<tr>
	<td>
	<?php echo 'Jumat'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Friday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>
        
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>	
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	</tr>
	
	<tr>
	<td>
	<?php echo 'Sabtu'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Saturday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>	
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	</tr>
	
	<tr>
	<td>
	<?php echo 'Minggu'; ?><br>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$tanggal = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Sunday'){
				echo $tanggal;
				}
	?>
	<?php endforeach; ?>
	</td>
	<td>
			<table style='border: none 0px #dddddd;'>
			<?php foreach ($shifts as $shift): ?>
			<tr>
			<td><?php echo $shift['Shift']['code']; ?></td>
			</tr>
			<?php endforeach; ?>
			</table>
	</td>	
        <?php foreach ($reactors as $reactor): ?>
			<td>
			<table style='border: none 0px #dddddd;'>	
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php $shifttest = ($productionSchedule['Shift']['code']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$tanggalbase = date( "d-m-Y", strtotime(substr($need, 0, 10)));
				?>
				
				<?php
				if(($tanggalbase == $tanggalbaru) && ($shifttest == $shift)){
				echo $productionSchedule['Product']['name'];
				}
				?>
		</td>
	<?php endforeach; ?>
	</table>
			</td>
			<td>
			<?php echo 'Lot'; ?>
			</td>
			<?php endforeach; ?>
			<td><?php echo 'CONDENSAT'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td><?php echo 'RELABEL'; ?></td>
			<td><?php echo 'Lot'; ?></td>
			<td ><?php echo 'REPACKING'; ?></td>
			<td><?php echo 'Lot'; ?></td>
        
	</tr>
	
	<?php // foreach ($productionSchedules as $productionSchedule): ?>
<!--	<tr>
		<td><?php echo h($productionSchedule['Shift']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['week']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Reactor']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['lot_no']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['create_date']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Sunday'){
				echo 'Minggu';
				}
				elseif($generate == 'Monday'){
				echo 'Senin';
				}
				elseif($generate == 'Tuesday'){
				echo 'Selasa';
				}
				elseif($generate == 'Wednesday'){
				echo 'Rabu';
				}
				elseif($generate == 'Thursday'){
				echo 'Kamis';
				}
				elseif($generate == 'Friday'){
				echo 'Jumat';
				}
				elseif($generate == 'Saturday'){
				echo 'Sabtu';
				}
				?>&nbsp;</td>
	</tr>-->
<?php // endforeach; ?>
	</table>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('shift_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('week'); ?></th>
			<th><?php echo $this->Paginator->sort('reactor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lot_no'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('create_date'); ?></th>
			<th><?php echo ('hari'); ?></th>
	</tr>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php echo h($productionSchedule['Shift']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['week']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Reactor']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['lot_no']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['create_date']); ?>&nbsp;</td>
		<td><?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
				$hari = date( "Y-m-l", strtotime(substr($need, 0, 10)));
				$generate = substr($hari,8);
				if($generate == 'Sunday'){
				echo 'Minggu';
				}
				elseif($generate == 'Monday'){
				echo 'Senin';
				}
				elseif($generate == 'Tuesday'){
				echo 'Selasa';
				}
				elseif($generate == 'Wednesday'){
				echo 'Rabu';
				}
				elseif($generate == 'Thursday'){
				echo 'Kamis';
				}
				elseif($generate == 'Friday'){
				echo 'Jumat';
				}
				elseif($generate == 'Saturday'){
				echo 'Sabtu';
				}
				?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
<?php endif; ?>
	</table>
	</div>
	</div>
</div>