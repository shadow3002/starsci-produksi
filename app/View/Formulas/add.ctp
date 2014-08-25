		<div class="row">
		<div class="panel">
		<div id="iner1">
	<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Add Formula'); ?></legend>
	<div id = "duplicater">
<?php
		echo $this->Form->input('Formula.0.product_id', array('style' => 'width:20%', 'empty' => '----- Select Product -----'));
		echo $this->Form->input('Formula.0.raw_material', array());
		echo $this->Form->input('Formula.0.percentage', array());	
		$now = new DateTime();
		$today = $now->format("Y-m-d H:i:s");
		$user = $this->Session->read('pengguna');
		echo $this->Form->input('Formula.0.create_date', array('type' => 'hidden', 'value' => $today));
		echo $this->Form->input('Formula.0.create_by', array('type' => 'hidden', 'value' => $user));

	?>
	</div>
	</fieldset>
	<input type="button" id="button" onlick="duplicate()" align = "left" value = "Add More">
<?php echo $this->Form->end('Submit'); ?>
</div>
</div>
</div>

<?php
	    echo $this->Html->script('jquery-1.10.2');
?>
<script>
document.getElementById('button').onclick = duplicate;
var i = 0;
var original = document.getElementById('duplicater');
function duplicate() {
	i = i + 1

	$('#Formula0ProductId').clone().attr('name', 'data[Formula][' + i + '][product_id]').appendTo('#duplicater').val($('#Formula0ProductId').val()).hide();
    $('<label>Raw Material</label>').clone().appendTo('#duplicater').val("");
	$('#Formula0RawMaterial').clone().attr('name', 'data[Formula][' + i + '][raw_material]').appendTo('#duplicater').val("");
    $('<label>Percantage</label>').clone().appendTo('#duplicater').val("");
	$('#Formula0Percentage').clone().attr('name', 'data[Formula][' + i + '][percentage]').appendTo('#duplicater').val("");
    $('#Formula0CreateDate').clone().attr('name', 'data[Formula][' + i + '][create_date]').appendTo('#duplicater');
    $('#Formula0CreateBy').clone().attr('name', 'data[Formula][' + i + '][create_by]').appendTo('#duplicater');
	}
</script>