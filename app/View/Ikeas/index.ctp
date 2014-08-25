		<div class="row">
		<div class="panel">
		<div id="iner2">
	<?php $this->paginator->options(array('index.php' => $this->passedArgs)); ?>
				<?php echo $this->Form->create('Ikea', array(
				'url' => array_merge(array('action' => 'index'), $this->params['pass'])
				)); ?>
			<table cellpadding="0" cellspacing="0">
				<tr>
				<td colspan='2'>
				<h3><?php echo __('Search'); ?>&nbsp;</h3>
				</td>
				</tr>
				<tr>
				<td><?php echo $this->Form->input('namaproduk', array('label' => '', 'placeholder'=>'Product Name', 'required' => false,'empty'=>true));?></td>
				<td><?php echo $this->Form->input('category', array('label' => '', 'placeholder'=>'Category', 'required' => false,'empty'=>true));?></td>
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
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('doc'); ?></th>
			<th><?php echo $this->Paginator->sort('pdf'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ikeas as $ikea): ?>
	<tr>
		<td><?php echo h($ikea['Ikea']['id']); ?>&nbsp;</td>
		<td><?php echo h($ikea['Ikea']['name']); ?>&nbsp;</td>
		<td><?php echo h($ikea['IkeaCategory']['name']); ?>&nbsp;</td>
		<td><?php if ($ikea['Ikea']['namafiledoc'])
				echo $this->Html->link($ikea['Ikea']['namafiledoc'], '/' . 'app' . '/' . 'webroot' . '/' . 'files'. '/' . 'uploads' . '/' . $ikea['Ikea']['namafiledoc']);?>&nbsp;</td>
		<td><?php if ($ikea['Ikea']['namafilepdf'])
				echo $this->Html->link($ikea['Ikea']['namafilepdf'], '/' . 'app' . '/' . 'webroot' . '/' . 'files'. '/' . 'uploads' . '/' . $ikea['Ikea']['namafilepdf']);?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ikea['Ikea']['id'])); ?>
			<?php if($current_user['group_user_id'] == '3'): ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ikea['Ikea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ikea['Ikea']['id']), null, __('Are you sure you want to delete # %s?', $ikea['Ikea']['id'])); ?>
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
