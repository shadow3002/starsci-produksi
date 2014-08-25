		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Production Cards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('product_name'); ?></th>
			<th><?php echo $this->Paginator->sort('standard_batch'); ?></th>
			<th><?php echo $this->Paginator->sort('lot_no'); ?></th>
			<th><?php echo $this->Paginator->sort('production_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('production_time'); ?></th>
			<th><?php echo $this->Paginator->sort('nitrogen'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('reactor_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productionCards as $productionCard): ?>
	<tr>
		<td><?php echo h($productionCard['ProductionCard']['code']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['product_name']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['standard_batch']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['lot_no']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionStatus']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['production_time']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['nitrogen']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['ProductionCard']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionCard['Reactor']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productionCard['ProductionCard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productionCard['ProductionCard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productionCard['ProductionCard']['id']), null, __('Are you sure you want to delete # %s?', $productionCard['ProductionCard']['id'])); ?>
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
