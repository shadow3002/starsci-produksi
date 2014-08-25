		<div class="row">
		<div class="panel">
		<div id="iner1">
<h2><?php echo __('Production Report'); ?></h2>
	<div id="view">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Kp'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['no_kp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($productionReport['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lot Number'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['lot_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Standart Quantity'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['standart_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actual Quantity'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['actual_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Category Id'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qc Passed Qty'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['qc_passed_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qc Rejected Qty'); ?></dt>
		<dd>
			<?php echo h($productionReport['ProductionReport']['qc_rejected_qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
</div>