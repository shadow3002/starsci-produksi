		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Production Schedules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('shift_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('week'); ?></th>
			<th><?php echo $this->Paginator->sort('reactor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lot_no'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productionSchedules as $productionSchedule): ?>
	<tr>
		<td><?php echo h($productionSchedule['ProductionSchedule']['id']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Shift']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['week']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['Reactor']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['lot_no']); ?>&nbsp;</td>
		<td><?php echo h($productionSchedule['ProductionSchedule']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productionSchedule['ProductionSchedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productionSchedule['ProductionSchedule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productionSchedule['ProductionSchedule']['id']), null, __('Are you sure you want to delete # %s?', $productionSchedule['ProductionSchedule']['id'])); ?>
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