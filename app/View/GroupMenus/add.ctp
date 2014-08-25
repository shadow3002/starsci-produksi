		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('GroupMenu'); ?>
	<fieldset>
		<legend><?php echo __('Add Group Menu'); ?></legend>
		
	<?php
	 	echo $this->Form->input('group_user_id', array('empty' => '---- Select User ----'));
		echo $this->Form->input('menu_category_id', array('empty' => '---- Select Menu Category ----', 'id' => 'menu_category_id'));
		echo $this->Form->input('menu_id', array('empty' => '----- Select Menu -----', 'id' => 'menu_id'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>


<?php
$this->Js->get('#GroupMenuMenuCategoryId')->event('change', 
	$this->Js->request(array(
		'controller'=>'menus',
		'action'=>'getByCategory'
		), array(
		'update'=>'#GroupMenuMenuId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>