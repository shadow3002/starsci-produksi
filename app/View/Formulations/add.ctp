		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('Formulation'); ?>
	<fieldset>
		<legend><?php echo __('Add Formulation'); ?></legend>		
	<div id = "duplicater">

	<?php
				echo $this->Form->input('Formulation.0.product_id', array('style' => 'width:20%', 'empty' => '----- Select Product -----'));
				echo $this->Form->input('Formulation.0.production_card_id', array('empty' => '--- Select Production Card ---', 'style' =>'width:25%'));
	?>
				<?php 
					echo $this->Form->input('Formulation.0.raw_material', array());
					echo $this->Form->input('Formulation.0.percentage', array());
					echo $this->Form->input('Formulation.0.std', array());
					echo $this->Form->input('Formulation.0.actual', array());
					echo $this->Form->input('Formulation.0.selisih', array());
					echo $this->Form->input('Formulation.0.note', array());
					$now = new DateTime();
					$today = $now->format("Y-m-d H:i:s");
					$user = $this->Session->read('pengguna');
					echo $this->Form->input('Formulation.0.create_date', array('type' => 'hidden', 'value' => $today));
					echo $this->Form->input('Formulation.0.create_by', array('type' => 'hidden', 'value' => $user));

				?>
		</div>
        </fieldset>
		
	<input type="button" id="button" onlick="duplicate()" align = "left" value = "Add More">
<?php echo $this->Form->end(__('Submit')); ?>
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

	$('#Formulation0ProductId').clone().attr('name', 'data[Formulation][' + i + '][product_id]').appendTo('#duplicater').val($('#Formulation0ProductId').val()).hide();
    $('#Formulation0ProductionCardId').clone().attr('name', 'data[Formulation][' + i + '][production_card_id]').appendTo('#duplicater').val($('#Formulation0ProductionCardId').val()).hide();
    $('<label>Raw Material</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0RawMaterial').clone().attr('name', 'data[Formulation][' + i + '][raw_material]').appendTo('#duplicater').val("");
    $('<label>Percantage</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0Percentage').clone().attr('name', 'data[Formulation][' + i + '][percentage]').appendTo('#duplicater').val("");
    $('<label>Std</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0Std').clone().attr('name', 'data[Formulation][' + i + '][std]').appendTo('#duplicater').val("");
    $('<label>Actual</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0Actual').clone().attr('name', 'data[Formulation][' + i + '][actual]').appendTo('#duplicater').val("");
    $('<label>Selisih</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0Selisih').clone().attr('name', 'data[Formulation][' + i + '][selisih]').appendTo('#duplicater').val("");
    $('<label>Note</label>').clone().appendTo('#duplicater').val("");
	$('#Formulation0Note').clone().attr('name', 'data[Formulation][' + i + '][note]').appendTo('#duplicater').val("");
    $('#Formulation0CreateDate').clone().attr('name', 'data[Formulation][' + i + '][create_date]').appendTo('#duplicater');
    $('#Formulation0CreateBy').clone().attr('name', 'data[Formulation][' + i + '][create_by]').appendTo('#duplicater');
	}
</script>
