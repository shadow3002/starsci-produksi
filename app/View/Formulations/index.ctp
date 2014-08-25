		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Formulations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('production_card_id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material'); ?></th>
			<th><?php echo $this->Paginator->sort('percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('std'); ?></th>
			<th><?php echo $this->Paginator->sort('actual'); ?></th>
			<th><?php echo $this->Paginator->sort('selisih'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formulations as $formulation): ?>
	<tr>
		<td><?php echo h($formulation['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($formulation['ProductionCard']['code']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['raw_material']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['percentage']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['std']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['actual']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['selisih']); ?>&nbsp;</td>
		<td><?php echo h($formulation['Formulation']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formulation['Formulation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formulation['Formulation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formulation['Formulation']['id']), null, __('Are you sure you want to delete # %s?', $formulation['Formulation']['id'])); ?>
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
