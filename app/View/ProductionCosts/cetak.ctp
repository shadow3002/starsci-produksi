		<div class="row">
		<div class="panel">
		<div id="iner1">
		<?php echo $this->Form->create('ProductionCost'); ?>
		
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
		$months = array('January' =>'January',
		'Febuary' =>'Febuary',
		'March' =>'March',
		'April' =>'April',
		'May' =>'May',
		'June' =>'June',
		'July' =>'July',
		'August' =>'August',
		'September' =>'September',
		'October' =>'October',
		'November' =>'November',
		'December' =>'December',
		);
		echo $this->Form->input('month', array('options' => $months, 'style' => 'width:25%'));
	?>
	</td>
	<td>
	<?php
		for($i = 2000;$i<=2100;$i++){
		$year[$i] = $i;
		}
		echo $this->Form->input('year', array('options' => $year, 'style' => 'width:25%'));
	?>
	</td>
	</tr>
	<tr>
	<center><td colspan='3'><?php echo $this->Form->end(__('Submit')); ?></td></center>
	</tr>
</table>
</div>
	<?php if(!empty($this->request->data['ProductionCost']['month']) && !empty($this->request->data['ProductionCost']['year'])): ?>
	<a href='#' class='print' rel="content">Print</a>
	<div id = "content">
	<?php echo $this->Html->script('jquery-1.10.2'); ?>
	<?php echo $this->Html->script('jquery.PrintArea'); ?>
	<?php echo $this->Html->script('core'); ?>
	<table>
	<tr>
		<td>
			<b>Variable Cost</b>
		</td>
	</tr>
	<?php 
	$variablecosttotal = 0;
	$fixedcosttotal = 0; 
	?>
	<?php foreach ($variableCosts as $variableCost): ?>
		<tr>
			<?php if($variableCost['VariableCost']['variable_cost_category_id'] == '5'){ ?>
					<td>
						<?php echo ($variableCost['VariableCost']['name']); ?>
					</td>		
			<?php foreach ($productionCosts as $productionCost): ?>
			<?php if($variableCost['VariableCost']['name'] == $productionCost['VariableCost']['name']){ ?>
					<td><?php echo h($productionCost['ProductionCost']['amount']); ?>&nbsp;</td>
					<td><?php echo h($productionCost['ProductionCost']['note']); ?>&nbsp;</td>
				<?php
					$variablecosttotal = $variablecosttotal + $productionCost['ProductionCost']['amount'];
					} 
				else {
				?>
					<td><?php echo 0; ?></td>
				<?php
				}
				?>
			<?php endforeach; ?>
		<?php } ?>
		</tr>
	<?php endforeach; ?>	
	
	
	<tr>
		<td>
			<b>Fixed Cost</b>
		</td>
	</tr>
	<?php foreach ($variableCosts as $variableCost): ?>
		<tr>
						<?php if ($variableCost['VariableCost']['variable_cost_category_id'] == '6') { ?>
					<td>
						<?php echo ($variableCost['VariableCost']['name']); ?>
					</td>		
			<?php foreach ($productionCosts as $productionCost): ?>
			<?php if(($variableCost['VariableCost']['name'] == $productionCost['VariableCost']['name'])){ ?>
					<td><?php echo h($productionCost['ProductionCost']['amount']); ?>&nbsp;</td>
					<td><?php echo h($productionCost['ProductionCost']['note']); ?>&nbsp;</td>
				<?php 
				$fixedcosttotal = $fixedcosttotal + $productionCost['ProductionCost']['amount'];
				} 
				else {
				?>
					<td><?php echo 0; ?></td>
				<?php
				}
				?>
			<?php endforeach; ?>
			<?php } ?>
		</tr>	
	<?php endforeach; ?>	
	<?php $sumtotal = $fixedcosttotal + $variablecosttotal; ?>
	<tr>
		<td>Total
		</td>
		<td><?php echo $sumtotal; ?>
		</td>
	</tr>
	</table>
	</div>
<?php endif; ?>
		</div>
	</div>
</div>