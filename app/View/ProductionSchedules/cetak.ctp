		<div class="rowedited">
		<div class="panel">
		<div id="iner1">
		<?php echo $this->Form->create('ProductionSchedule'); ?>
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
		echo $this->Form->input('month', array('options' => $months, 'style' =>'width:25%'));
	?>
	</td>
	<td>
	<?php
		for($i = 2000;$i<=2100;$i++){
		$year[$i] = $i;
		}
		echo $this->Form->input('year', array('options' => $year, 'style' =>'width:25%'));
	?>
	</td>
	</tr>
	<tr>
	<center><td colspan='3'><?php echo $this->Form->end(__('Submit')); ?></td></center>
	</tr>
</table>
</div>
	
	<?php if(!empty($this->request->data['ProductionSchedule']['week'])) : ?>
	
	<a href='#' class='print' rel="content">Print</a>
	<div id = "content">
	<?php echo $this->Html->script('jquery-1.10.2'); ?>
	<?php echo $this->Html->script('jquery.PrintArea'); ?>
	<?php echo $this->Html->script('core'); ?>
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
	
	<table style = "text-align:center" cellpadding="0" cellspacing="0" border = '1'>
	<tr>
	<td><?php echo 'Day / Date'; ?></td>
	<td><?php echo 'Shift'; ?></td>
	<td>
	<?php echo 'Product Liquid'; ?>

	<br>
	<br>
	<br>
	
		<table cellpadding="0" cellspacing="0" style='border: none 0px #dddddd;'>
			<tr>
			<?php $j = 0; ?>
			<?php foreach ($reactors as $reactor): ?>
			<td>
			<?php $j = $j + 1; ?>
			<?php echo ($reactor['Reactor']['name']); ?>
			<?php $react[$j] = $reactor['Reactor']['name']; ?>
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
	<?php echo 'Senin'; ?>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalsenin = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Monday'){
				echo $tanggalsenins = $tanggalsenin;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										<?php if(!empty($tanggalsenins)) { ?>
										<?php if($tanggalproduksi == $tanggalsenins){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php } ?>
									<?php }
									?>
									
									<?php endforeach; ?>
									<?php if(!empty($tanggalsenins)) {
									?>
									<td><?php echo 'CONDENSAT'; ?></td>
									<td><?php echo 'Lot'; ?></td>
									<td><?php echo 'RELABEL'; ?></td>
									<td><?php echo 'Lot'; ?></td>
									<td ><?php echo 'REPACKING'; ?></td>
									<td><?php echo 'Lot'; ?></td>
									<?php
									} ?>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalsenins)) : ?>
										<?php if($tanggalproduksi == $tanggalsenins){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggalsenins) - 1){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
	<tr>
	<td>
	<?php echo 'Selasa'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalselasa = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Tuesday'){
				echo $tanggalselasas = $tanggalselasa;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalselasas)) : ?>
										<?php if($tanggalproduksi == $tanggalselasas): ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalselasas)) : ?>
										<?php if($tanggalproduksi == $tanggalselasas){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggalselasas) - 1){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
	<tr>
	<td>
	<?php echo 'Rabu'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalrabu = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Wednesday'){
				echo $tanggalrabus = $tanggalrabu;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalrabus)) : ?>
										<?php if($tanggalproduksi == $tanggalrabus){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php }
											elseif($tanggalproduksi != $tanggalrabus){
											
											}?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalrabus)) : ?>
										<?php if($tanggalproduksi == $tanggalrabus){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggalrabus) - 1){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
	<tr>
	<td>
	<?php echo 'Kamis'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalkamis = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Thursday'){
				echo $tanggalkamises = $tanggalkamis;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										<?php if(!empty($tanggalkamises)) : ?>
										<?php if($tanggalproduksi == $tanggalkamises): ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalkamises)) : ?>
										<?php if($tanggalproduksi == $tanggalkamises){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<td>
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
												<?php
												} 
												?>
												</td>
											
											<?php }
											else{
											?>
											<td>&nbsp;</td>
											<?php
											}
											?>
											
										<?php }
											else{
											
											}?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	
	</tr>
	
	<tr>
	<td>
	<?php echo 'Jumat'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggaljumat = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Friday'){
				echo $tanggaljumats = $tanggaljumat;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										<?php if(!empty($tanggaljumats)) : ?>
										<?php if($tanggalproduksi == $tanggaljumats): ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggaljumats)) : ?>
										<?php if($tanggalproduksi == $tanggaljumats){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggaljumats) - 1){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
	<tr>
	<td>
	<?php echo 'Sabtu'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalsabtu = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Saturday'){
				echo $tanggalsabtus = $tanggalsabtu;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										<?php if(!empty($tanggalsabtus)) : ?>
										<?php if($tanggalproduksi == $tanggalsabtus): ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td><td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalsabtus)) : ?>
										<?php if($tanggalproduksi == $tanggalsabtus){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggalsabtus) - 1 != 0){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
	<tr>
	<td>
	<?php echo 'Minggu'; ?><br>
	<?php foreach ($catchdates as $catchdate): ?>
	<?php $need = ($catchdate['0']['create_date']);
				$hari = date( "Y-m-l", strtotime($need));
				$tanggalminggu = date( "d-m-Y", strtotime($need));
				$generate = substr($hari,8);
				if($generate == 'Sunday'){
				echo $tanggalminggus = $tanggalminggu;
				
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
	
	<td>
			<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
				<tr>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										<?php if(!empty($tanggalminggus)) : ?>
										<?php if($tanggalproduksi == $tanggalminggus): ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													
												<td><?php echo $productionSchedule['Product']['name']; ?></td>
												<td>LOT</td>
												<?php
												} 
												else{
												?>
												<td></td>
												<td>LOT</td>
												<?php
												}
												?>
											
											<?php }
											?>
											
										<?php endif; ?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					
					<td><?php echo 'CONDENSAT'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td><?php echo 'RELABEL'; ?></td>
					<td><?php echo 'Lot'; ?></td>
					<td ><?php echo 'REPACKING'; ?></td>
					<td><?php echo 'Lot'; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
	</td>
	<td>
		<table style='border: none 0px #dddddd;'>
				<?php foreach ($shifts as $shift): ?>
					<tr>
						<td>
					<?php foreach ($reactors as $reactor): ?>
									<?php foreach ($productionSchedules as $productionSchedule): ?>
									<?php $need = ($productionSchedule['ProductionSchedule']['create_date']);
										$tanggalproduksi = date( "d-m-Y", strtotime($need));
										?>
										
										<?php if(!empty($tanggalminggus)) : ?>
										<?php if($tanggalproduksi == $tanggalminggus){ ?>

											<?php if($shift['Shift']['code'] ==  $productionSchedule['Shift']['code']){ ?>
											
												<?php if($reactor['Reactor']['name'] == $productionSchedule['Reactor']['name']){ ?>
													<?php echo $productionSchedule['ProductionSchedule']['note']; ?>
													<?php if(count($tanggalproduksi == $tanggalminggus) - 1){
														echo ',';
													}
													?>
												<?php
												} 
												?>
											
											<?php }
											?>
											
										<?php }
										?>
									<?php endif; ?>
									<?php endforeach; ?>
					<?php endforeach; ?>
					
					</td>
				</tr>
				<?php endforeach; ?>
		</table>
	</td>
	</tr>
	
<?php endif; ?>
	</table>
	</div>
	</div>
	</div>
</div>