		<div class="row">
		<div class="panel">
		<div id="iner1">
<h2><?php echo __('Group Menu'); ?></h2>
	<div id="view">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupMenu['GroupMenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo ($groupMenu['MenuCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($groupMenu['GroupMenu']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($groupMenu['GroupMenu']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($groupMenu['GroupMenu']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($groupMenu['GroupMenu']['update_by']); ?>
			&nbsp;
		</dd>
	</dl>
	</div>
</div>
</div>
</div>