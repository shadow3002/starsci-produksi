<?php
$this->Activecalendar->includeFiles('ceramique');

?>

<div class="examples form">
<?php echo $this->Form->create('Example');?>
	<fieldset>
 		<legend><?php echo __('Add %s', __('Example'));?></legend>
	<?php
		echo $this->Form->input('link');
		echo $this->Form->input('title');
		echo $this->Form->input('codesnippet_id', array('empty' => array('0' => '- - -')));

		echo $this->Form->input('published', array('type' => 'text', 'class' => 'datepicker', 'id' => $this->Activecalendar->setId(), 'after' => $this->Activecalendar->setDelete()));
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List %s', __('Examples')), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List %s', __('Codesnippets')), array('controller' => 'codesnippets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codesnippet'), array('controller' => 'codesnippets', 'action' => 'add')); ?> </li>
	</ul>
</div>