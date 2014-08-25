		<div class="row">
		<div class="panel">
		<div id="iner1">
	<h2><?php echo __('Packagings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_id'); ?></th>
			<th><?php echo $this->Paginator->sort('production_card_id'); ?></th>
			<th><?php echo $this->Paginator->sort('std'); ?></th>
			<th><?php echo $this->Paginator->sort('actual'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($packagings as $packaging): ?>
	<tr>
		<td><?php echo h($packaging['Packaging']['id']); ?>&nbsp;</td>
		<td><?php echo h($packaging['Pack']['name']); ?>&nbsp;</td>
		<td><?php echo h($packaging['ProductionCard']['code']); ?>&nbsp;</td>
		<td><?php echo h($packaging['Packaging']['std']); ?>&nbsp;</td>
		<td><?php echo h($packaging['Packaging']['actual']); ?>&nbsp;</td>
		<td><?php echo h($packaging['Packaging']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $packaging['Packaging']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $packaging['Packaging']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $packaging['Packaging']['id']), null, __('Are you sure you want to delete # %s?', $packaging['Packaging']['id'])); ?>
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
	</div>