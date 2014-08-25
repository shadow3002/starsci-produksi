		<div class="row">
		<div class="panel">
		<div id="iner2">
		<?php $this->paginator->options(array('index.php' => $this->passedArgs)); ?>
				<?php echo $this->Form->create('Coamaster', array(
				'url' => array_merge(array('action' => 'index'), $this->params['pass'])
				)); ?>
				<table cellpadding="0" cellspacing="0">
				<tr>
				<td colspan='2'>
				<h3><?php echo __('Search'); ?>&nbsp;</h3>
				</td>
				</tr>
				<tr>
				<td><?php echo $this->Form->input('namaproduk', array('label' => '', 'placeholder'=>'No Coa', 'required' => false,'empty'=>true));?></td>
				<td><?php echo $this->Form->input('category', array('label' => '', 'placeholder'=>'Lot No', 'required' => false,'empty'=>true));?></td>
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
			<th><?php echo $this->Paginator->sort('nocoa'); ?></th>
			<th><?php echo $this->Paginator->sort('lotno'); ?></th>
			<th><?php echo $this->Paginator->sort('namaproduk'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coamasters as $coamaster): ?>
	<tr>
		<td><?php echo h($coamaster['Coamaster']['id']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Coamaster']['nocoa']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Coamaster']['lotno']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Coamaster']['namaproduk']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coamaster['Coamaster']['id'])); ?>
			<?php if($current_user['group_user_id'] == '3' || $current_user['group_user_id'] == '7'): ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coamaster['Coamaster']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coamaster['Coamaster']['id']), null, __('Are you sure you want to delete # %s?', $coamaster['Coamaster']['id'])); ?>
			<?php endif; ?>
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
