		<div class="row">
		<div class="panel">
		<div id="iner2">
	<h2><?php echo __('Tbdownload Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('create_date'); ?></th>
			<th><?php echo $this->Paginator->sort('create_by'); ?></th>
			<th><?php echo $this->Paginator->sort('update_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tbdownloadCategories as $tbdownloadCategory): ?>
	<tr>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['create_by']); ?>&nbsp;</td>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($tbdownloadCategory['TbdownloadCategory']['update_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tbdownloadCategory['TbdownloadCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tbdownloadCategory['TbdownloadCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tbdownloadCategory['TbdownloadCategory']['id']), null, __('Are you sure you want to delete # %s?', $tbdownloadCategory['TbdownloadCategory']['id'])); ?>
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
