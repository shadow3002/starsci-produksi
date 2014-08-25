<h2>Bitmasks</h2>
Using the BitmaskedBehavior

<h3>Table</h3>
<table class="list">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Flag (bitmasked)</th>
</tr>
<?php foreach ($records as $record) { ?>
<tr>
	<td><?php echo h($record['BitmaskRecord']['id']); ?></td>
	<td><?php echo h($record['BitmaskRecord']['name']); ?></td>
	<td><?php echo pre($record['BitmaskRecord']['flag']); ?></td>
</tr>
<?php } ?>
</table>


<h3>sss</h3>

<div class="page form">
<?php echo $this->Form->create('BitmaskRecord');?>
	<fieldset>
 		<legend><?php echo __('Add %s', __('Entry')); ?></legend>
	<?php
		echo $this->Form->input('name', array());
		echo $this->Form->input('flag', array('type' => 'select', 'multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<?php if (!empty($result)) { ?>
<h3>Result</h3>
<?php
foreach ($result as $key => $value) {
	echo pre($value['from']);
	echo pre($value['to']);
	echo BR;
}
echo '<pre>';
foreach ($result as $key => $value) {
	echo $value['sql'] . PHP_EOL;
}
echo '</pre>';
?>
<?php } 