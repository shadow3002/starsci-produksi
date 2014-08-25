		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Production Costs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('variable_cost_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productionCosts as $productionCost): ?>
	<tr>
		<td><?php echo h($productionCost['ProductionCost']['id']); ?>&nbsp;</td>
		<td><?php echo h($productionCost['ProductionCost']['amount']); ?>&nbsp;</td>
		<td><?php echo h($productionCost['ProductionCost']['month']); ?>&nbsp;</td>
		<td><?php echo h($productionCost['ProductionCost']['year']); ?>&nbsp;</td>
		<td><?php echo h($productionCost['ProductionCost']['note']); ?>&nbsp;</td>
		<td>
			<?php echo ($productionCost['VariableCost']['name']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productionCost['ProductionCost']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productionCost['ProductionCost']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productionCost['ProductionCost']['id']), null, __('Are you sure you want to delete # %s?', $productionCost['ProductionCost']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
</div>