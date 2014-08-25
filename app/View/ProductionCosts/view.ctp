		<div class="row">
		<div class="panel">
		<div id="iner1">
<h2><?php echo __('Production Cost'); ?></h2>
		<div id="view">
		<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variable Cost'); ?></dt>
		<dd>
			<?php echo $productionCost['VariableCost']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($productionCost['ProductionCost']['modified_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
</div>