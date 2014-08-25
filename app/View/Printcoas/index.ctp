<?php echo $this->Html->css('styles'); ?>
	<div id='borderone'>
		<div id="iner">
		<?php $this->paginator->options(array('index.php' => $this->passedArgs)); ?>
				<h2><?php echo __('Search'); ?>&nbsp;</h2>
				<?php echo $this->Form->create('Coamaster', array(
				'url' => array_merge(array('action' => 'index'), $this->params['pass'])
				)); ?>
				<?php echo $this->Form->input('nocoa', array('label' => 'No Coa', 'required' => false,'empty'=>true));?>
				<?php echo $this->Form->input('lotno', array('label' => 'Lot No', 'required' => false,'empty'=>true));?>
				<?php  echo $this->Form->submit(__('Search', true)); ?>
				<?php echo $this->Form->end(); ?>
				
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nocoa'); ?></th>
			<th><?php echo $this->Paginator->sort('lotno'); ?></th>
			<th><?php echo $this->Paginator->sort('namaproduk'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($printcoas as $coamaster): ?>
	<tr>
		<td><?php echo h($coamaster['Printcoa']['id']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Printcoa']['nocoa']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Printcoa']['lotno']); ?>&nbsp;</td>
		<td><?php echo h($coamaster['Printcoa']['namaproduk']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coamaster['Printcoa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coamaster['Printcoa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coamaster['Printcoa']['id']), null, __('Are you sure you want to delete # %s?', $coamaster['Printcoa']['id'])); ?>
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
