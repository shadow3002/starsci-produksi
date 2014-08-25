		<div class="row">
		<div class="panel">
		<div id="iner2">

	<h2><?php echo __('Production Reports'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('no_kp'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('production_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lot_number'); ?></th>
			<th><?php echo $this->Paginator->sort('standart_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('actual_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('qc_passed_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('qc_rejected_qty'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productionReports as $productionReport): ?>
	<tr>
		<td><?php echo h($productionReport['ProductionReport']['no_kp']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['lot_number']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['standart_quantity']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['actual_quantity']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['note']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['qc_passed_qty']); ?>&nbsp;</td>
		<td><?php echo h($productionReport['ProductionReport']['qc_rejected_qty']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productionReport['ProductionReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productionReport['ProductionReport']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productionReport['ProductionReport']['id']), null, __('Are you sure you want to delete # %s?', $productionReport['ProductionReport']['id'])); ?>
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
