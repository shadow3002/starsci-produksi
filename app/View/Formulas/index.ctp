		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Formulas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material'); ?></th>
			<th><?php echo $this->Paginator->sort('percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formulas as $formula): ?>
	<tr>
		<td><?php echo h($formula['Formula']['id']); ?>&nbsp;</td>
		<td><?php echo h($formula['Formula']['raw_material']); ?>&nbsp;</td>
		<td><?php echo h($formula['Formula']['percentage']); ?>&nbsp;</td>
		<td><?php echo h($formula['Product']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formula['Formula']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formula['Formula']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formula['Formula']['id']), null, __('Are you sure you want to delete # %s?', $formula['Formula']['id'])); ?>
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
