		<div class="row">
		<div class="panel">
		<div id="iner1">

<center><h2><?php echo __('MSDS'); ?></h2></center>
	<div id="view">
	<dl>
		<dt><?php echo __('Nama Produk'); ?></dt>
		<dd>
			<?php echo h($tbdownload['Tbdownload']['namaproduk']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($tbdownload['TbdownloadCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('doc'); ?></dt>
		<dd>
			<?php echo h($tbdownload['Tbdownload']['namafiledoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('pdf'); ?></dt>
		<dd>
			<?php echo h($tbdownload['Tbdownload']['namafilepdf']); ?>
			&nbsp;
		</dd>
		
	</dl>
	</div>
</div>
</div>
</div>