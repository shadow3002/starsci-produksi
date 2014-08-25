		<div class="row">
		<div class="panel">
		<div id="iner1">
		<?php echo $this->Form->create('ProductionReport'); ?>
		
	<div style="text-align:center">
	<table cellpadding="0" cellspacing="0" width='100%'>
				<tr>
				<td colspan='3'>
				<h3><center><?php echo __('Search'); ?></center>&nbsp;</h3>
				</td>
				</tr>
	<tr>
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
	<center><td colspan='3'><?php echo $this->Form->end('Submit'); ?></td></center>
	</tr>
</table>
	</div>

<?php if(!empty($this->request->data['ProductionReport']['year'])):  ?>
	<a href='javascript:printContent("dua")' id='print_link'>Print</a>
	<div id = "dua">
	<?php echo $this->Html->script('menu'); ?>

	<table>
		<tr>
			<td width = '30%'>Month</td>
			<td>Finish Good
			<br>
			<br>
				<table>
					<tr>
						<td>Qc Passed Qty</td>
						<td>Qc Rejected Qty</td>
						<td>Qc Percentage</td>
					</tr>
				</table>
			</td>
			<td>Tooling
			<br>
			<br>
				<table>
					<tr>
						<td>Qc Passed Qty</td>
						<td>Qc Rejected Qty</td>
						<td>Qc Percentage</td>
					</tr>
				</table>
			</td>
			<td>Total
			<br>
			<br>
				<table>
					<tr>
						<td>Qc Passed Qty</td>
						<td>Qc Rejected Qty</td>
						<td>Qc Percentage</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>Januari</td>
			
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '1') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '1') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed1 = 0;
								$hasilrejected1 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '1')){
						$hasilpassed1 = $hasilpassed1 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected1 = $hasilrejected1 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed1; ?></td>
							<td><?php echo $hasilrejected1; ?></td>
							<td>
							<?php 
								if(($hasilpassed1 == null) || ($hasilrejected1 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected1 / $hasilpassed1) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>Febuari</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '2') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '2') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed2 = 0;
								$hasilrejected2 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '2')){
						$hasilpassed2 = $hasilpassed2 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected2 = $hasilrejected2 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed2; ?></td>
							<td><?php echo $hasilrejected2; ?></td>
							<td>
							<?php 
								if(($hasilpassed2 == null) || ($hasilrejected2 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected2 / $hasilpassed2) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>Maret</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '3') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '3') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed3 = 0;
								$hasilrejected3 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '3')){
						$hasilpassed3 = $hasilpassed3 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected3 = $hasilrejected3 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed3; ?></td>
							<td><?php echo $hasilrejected3; ?></td>
							<td>
							<?php 
								if(($hasilpassed3 == null) || ($hasilrejected3 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected3 / $hasilpassed3) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>April</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '4') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '4') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed4 = 0;
								$hasilrejected4 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '4')){
						$hasilpassed4 = $hasilpassed4 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected4 = $hasilrejected4 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed4; ?></td>
							<td><?php echo $hasilrejected4; ?></td>
							<td>
							<?php 
								if(($hasilpassed4 == null) || ($hasilrejected4 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected4 / $hasilpassed4) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>Mei</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '5') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '5') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed5 = 0;
								$hasilrejected5 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '5')){
						$hasilpassed5 = $hasilpassed5 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected5 = $hasilrejected5 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed5; ?></td>
							<td><?php echo $hasilrejected5; ?></td>
							<td>
							<?php 
								if(($hasilpassed5 == null) || ($hasilrejected5 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected5 / $hasilpassed5) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		<tr>
			<td>Juni</td>

			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '6') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '6') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed6 = 0;
								$hasilrejected6 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '6')){
						$hasilpassed6 = $hasilpassed6 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected6 = $hasilrejected6 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed6; ?></td>
							<td><?php echo $hasilrejected6; ?></td>
							<td>
							<?php 
								if(($hasilpassed6 == null) || ($hasilrejected6 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected6 / $hasilpassed6) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
			
		</tr>
		
		
		
		
		
		<tr>
			<td>Juli</td>
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '7') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '7') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed7 = 0;
								$hasilrejected7 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '7')){
						$hasilpassed7 = $hasilpassed7 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected7 = $hasilrejected7 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed7; ?></td>
							<td><?php echo $hasilrejected7; ?></td>
							<td>
							<?php 
								if(($hasilpassed7 == null) || ($hasilrejected7 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected7 / $hasilpassed7) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
			
		</tr>
		
		
		
		
		
		<tr>
			<td>Agustus</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '8') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '8') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed8 = 0;
								$hasilrejected8 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '8')){
						$hasilpassed8 = $hasilpassed8 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected8 = $hasilrejected8 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed8; ?></td>
							<td><?php echo $hasilrejected8; ?></td>
							<td>
							<?php 
								if(($hasilpassed8 == null) || ($hasilrejected8 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected8 / $hasilpassed8) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>September</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '9') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '9') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed9 = 0;
								$hasilrejected9 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '9')){
						$hasilpassed9 = $hasilpassed9 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected9 = $hasilrejected9 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed9; ?></td>
							<td><?php echo $hasilrejected9; ?></td>
							<td>
							<?php 
								if(($hasilpassed9 == null) || ($hasilrejected9 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected9 / $hasilpassed9) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>Oktober</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '10') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '10') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed10 = 0;
								$hasilrejected10 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '10')){
						$hasilpassed10 = $hasilpassed10 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected10 = $hasilrejected10 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed10; ?></td>
							<td><?php echo $hasilrejected10; ?></td>
							<td>
							<?php 
								if(($hasilpassed10 == null) || ($hasilrejected10 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected10 / $hasilpassed10) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>November</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '11') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '11') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed11 = 0;
								$hasilrejected11 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '11')){
						$hasilpassed11 = $hasilpassed11 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected11 = $hasilrejected11 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed11; ?></td>
							<td><?php echo $hasilrejected11; ?></td>
							<td>
							<?php 
								if(($hasilpassed11 == null) || ($hasilrejected11 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected11 / $hasilpassed11) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td>Desember</td>
						<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '12') && ($productionReport['ProductionReport']['production_category_id'] == '1')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '12') && ($productionReport['ProductionReport']['production_category_id'] == '2')){
						?>
							<td><?php echo ($productionReport['ProductionReport']['qcpassedqty']); ?></td>
							<td><?php echo ($productionReport['ProductionReport']['qcrejectedqty']); ?></td>
							<td>
							<?php 
								if(($productionReport['ProductionReport']['qcpassedqty'] == null)){
									echo '0'; 
								}
								else{
									echo substr(($productionReport['ProductionReport']['qcrejectedqty'] / $productionReport['ProductionReport']['qcpassedqty']) * 100, 0, 4);
								}
							?>
							</td>
						<?php
						}
						?>
						<?php endforeach; ?>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $hasilpassed12 = 0;
								$hasilrejected12 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php $dd = ($productionReport['ProductionReport']['createdate']); ?>
						<?php if(($dd == '12')){
						$hasilpassed12 = $hasilpassed12 + ($productionReport['ProductionReport']['qcpassedqty']);
						$hasilrejected12 = $hasilrejected12 + ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						
							<td><?php echo $hasilpassed12; ?></td>
							<td><?php echo $hasilrejected12; ?></td>
							<td>
							<?php 
								if(($hasilpassed12 == null) || ($hasilrejected12 == null)){
									echo '0'; 
								}
								else{
									echo substr(($hasilrejected12 / $hasilpassed12) * 100, 0, 4);
								}
							?>
							</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>Rata - Rata</td>
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $pembagi1 = 0;
							$pembagi2 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php if(($productionReport['ProductionReport']['production_category_id'] == '1')){
						$pembagi1 = $pembagi1 + 1;
						$pembagi2 = $pembagi2 + 1;
						$ratapassed[$pembagi1] = ($productionReport['ProductionReport']['qcpassedqty']);
						$ratarejected[$pembagi2] = ($productionReport['ProductionReport']['qcrejectedqty']);
						
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						<td><?php echo $ratafinishpass = (array_sum($ratapassed)) / count($ratapassed); ?></td>
						<td><?php echo $ratafinishreject = (array_sum($ratarejected)) / count($ratarejected); ?></td>
						<td>
							<?php 
								if(($ratafinishpass == null) || ($ratafinishreject == null)){
									echo '0'; 
								}
								else{
									echo substr(($ratafinishreject / $ratafinishpass) * 100, 0, 4);
								}
							?>
						</td>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php $pembagi3 = 0;
							$pembagi4 = 0; ?>
						<?php foreach ($productionReports as $productionReport): ?>
						<?php if(($productionReport['ProductionReport']['production_category_id'] == '2')){
						$pembagi3 = $pembagi3 + 1;
						$pembagi4 = $pembagi4 + 1;
						$ratapassed1[$pembagi3] = ($productionReport['ProductionReport']['qcpassedqty']);
						$ratarejected1[$pembagi4] = ($productionReport['ProductionReport']['qcrejectedqty']);
						?>
						<?php
						}
						?>
						<?php endforeach; ?>
						<td><?php echo $ratatoolpass = (array_sum($ratapassed1)) / count($ratapassed1); ?></td>
						<td><?php echo $ratatoolreject = (array_sum($ratarejected1)) / count($ratarejected1); ?></td>
						<td>
							<?php 
								if(($ratatoolpass == null) || ($ratatoolreject == null)){
									echo '0'; 
								}
								else{
									echo substr(($ratatoolreject / $ratatoolpass) * 100, 0, 4);
								}
							?>
						</td>
					</tr>
				</table>
			</td>
			
			<td>
				<table class = 'child' width = '100%'>
					<tr>
						<?php for($i = 1; $i<=12; $i++) { ?>
						<?php 
						$hasillewat = ${'hasilpassed'.$i};
						$hasiltolak = ${'hasilrejected'.$i};
						if($hasillewat != 0){
						$ratatotalpassed[$i] = ($hasillewat);
						}
						if($hasiltolak != 0){
						$ratatotalrejected[$i] = ($hasiltolak);
						}
						?>
						<?php
						} 
						?>
						<td><?php echo $ratatotalpass = (array_sum($ratatotalpassed) / count($ratatotalpassed)); ?></td>
						<td><?php echo $ratatotalreject = (array_sum($ratatotalrejected) / count($ratatotalrejected)); ?></td>
						<td>
							<?php 
								if(($ratatotalpass == null) || ($ratatotalreject == null)){
									echo '0'; 
								}
								else{
									echo substr(($ratatotalreject / $ratatotalpass) * 100, 0, 4);
								}
							?>
						</td>
					</tr>
				</table>
			</td>
			
			
		</tr>
	
	</table>
	</div>
<?php endif; ?>
	
</div>
</div>
</div>