		<div class="row">
		<div class="panel">
		<div id="iner2">
		<?php $this->paginator->options(array('index.php' => $this->passedArgs)); ?>
				<?php echo $this->Form->create('GroupMenu', array(
				'url' => array_merge(array('action' => 'index'), $this->params['pass'])
				)); ?>
				<table cellpadding="0" cellspacing="0">
				<tr>
				<td colspan='2'>
				<h3><?php echo __('Search'); ?>&nbsp;</h3>
				</td>
				</tr>
				<tr>
				<td><?php echo $this->Form->input('namaproduk', array('label' => '', 'placeholder'=>'Username', 'required' => false,'empty'=>true));?></td>
				<td><?php echo $this->Form->input('category', array('label' => '', 'placeholder'=>'Name', 'required' => false,'empty'=>true));?></td>
				</tr>
				<tr>
				<td colspan='2'>
				<?php  echo $this->Form->submit(__('Search', true)); ?>
				</td>
				</tr>
				<?php echo $this->Form->end(); ?>
				</table>		
	<table cellpadding="0" cellspacing="0" width='100%'>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Access'); ?></th>
			<th><?php echo $this->Paginator->sort('create_date'); ?></th>
			<th><?php echo $this->Paginator->sort('create_by'); ?></th>
			<th><?php echo $this->Paginator->sort('update_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groupMenus as $groupMenu): ?>
	<tr>
		<td><?php echo h($groupMenu['GroupMenu']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($groupMenu['MenuCategory']['name'], array('controller' => 'menus', 'action' => 'view', $groupMenu['MenuCategory']['id'])); ?>
		</td>
		<td><?php echo h($groupMenu['GroupUser']['name']); ?>&nbsp;</td>
		<td><?php echo h($groupMenu['GroupMenu']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($groupMenu['GroupMenu']['create_by']); ?>&nbsp;</td>
		<td><?php echo h($groupMenu['GroupMenu']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($groupMenu['GroupMenu']['update_by']); ?>&nbsp;</td>
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('action' => 'view', $groupMenu['GroupMenu']['id'])); ?>
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $groupMenu['GroupMenu']['id'])); ?>
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $groupMenu['GroupMenu']['id']), null, __('Are you sure you want to delete # %s?', $groupMenu['GroupMenu']['id'])); ?>
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
