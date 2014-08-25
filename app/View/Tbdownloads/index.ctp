		<div class="row">
		<div class="panel">
		<div id="iner2">
				<?php $this->paginator->options(array('index.php' => $this->passedArgs)); ?>
				<?php echo $this->Form->create('Tbdownload', array(
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
						<th><?php echo $this->Paginator->sort('Nama Produk'); ?></th>
						<th><?php echo $this->Paginator->sort('Category'); ?></th>
						<th><?php echo $this->Paginator->sort('doc'); ?></th>
						<th><?php echo $this->Paginator->sort('pdf'); ?></th>
						<th><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($tbdownloads as $tbdownload): ?>
				<tr>
					<td><?php echo h($tbdownload['Tbdownload']['namaproduk']); ?>&nbsp;</td>
					<td><?php echo h($tbdownload['TbdownloadCategory']['name']); ?>&nbsp;</td>
					<td><?php if ($tbdownload['Tbdownload']['namafiledoc'])
							echo $this->Html->link($tbdownload['Tbdownload']['namafiledoc'], '/' . 'app' . '/' . 'webroot' . '/' . 'files'. '/' . 'uploads' . '/' . $tbdownload['Tbdownload']['namafiledoc']);?>&nbsp;</td>
					<td><?php if ($tbdownload['Tbdownload']['namafilepdf'])
							echo $this->Html->link($tbdownload['Tbdownload']['namafilepdf'], '/'  . 'app' . '/' . 'webroot' . '/' . 'files'. '/' . 'uploads' . '/' . $tbdownload['Tbdownload']['namafilepdf']);?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $tbdownload['Tbdownload']['id'])); ?>
						<?php if($current_user['group_user_id'] == '3'): ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tbdownload['Tbdownload']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tbdownload['Tbdownload']['id']), null, __('Are you sure you want to delete # %s?', $tbdownload['Tbdownload']['id'])); ?>
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
      