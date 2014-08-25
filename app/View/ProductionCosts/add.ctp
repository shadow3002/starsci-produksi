		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionCost'); ?>
	<fieldset>
		<legend><?php echo __('Add Production Cost'); ?></legend>	
	<div id = "duplicater">
		<?php	
				$months = array('January' =>'January',
				'Febuary' =>'Febuary',
				'March' =>'March',
				'April' =>'April',
				'May' =>'May',
				'June' =>'June',
				'July' =>'July',
				'August' =>'August',
				'September' =>'September',
				'October' =>'October',
				'November' =>'November',
				'December' =>'December',
				);
				echo $this->Form->input('ProductionCost.0.month', array('empty' => '--- Select Month ---', 'style' => 'width:20%', 'options' => $months));
				for($j = 2000;$j<=2100;$j++){
				$year[$j] = $j;
				}
				echo $this->Form->input('ProductionCost.0.year', array('empty' => '--- Select Year ---', 'style' => 'width:20%', 'options' => $year));		
		?>
	<?php
					echo $this->Form->input('ProductionCost.0.variable_cost_id', array('style' => 'width:20%', 'empty' =>'----- select value -----'));
					echo $this->Form->input('ProductionCost.0.amount', array());
					echo $this->Form->input('ProductionCost.0.note', array());
					
					$now = new DateTime();
					$today = $now->format("Y-m-d H:i:s");
					$user = $this->Session->read('pengguna');
					echo $this->Form->input('ProductionCost.0.create_date', array('type' => 'hidden', 'value' => $today));
					echo $this->Form->input('ProductionCost.0.create_by', array('type' => 'hidden', 'value' => $user));
		?>
		</div>
	</fieldset>	
	<input type="button" id="button" onlick="duplicate()" align = "left" value ="Add More">
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
	$('#ProductionCost0Month').clone().attr('name', 'data[ProductionCost][' + i + '][month]').appendTo('#duplicater').val($('#ProductionCost0Month').val()).hide();
    $('#ProductionCost0Year').clone().attr('name', 'data[ProductionCost][' + i + '][year]').appendTo('#duplicater').val($('#ProductionCost0Year').val()).hide();
    $('<label>Variable Cost</label>').clone().appendTo('#duplicater').val("");
	$('#ProductionCost0VariableCostId').clone().attr('name', 'data[ProductionCost][' + i + '][variable_cost_id]').appendTo('#duplicater');
    $('<label>Amount</label>').clone().appendTo('#duplicater').val("");
	$('#ProductionCost0Amount').clone().attr('name', 'data[ProductionCost][' + i + '][amount]').appendTo('#duplicater').val("");
    $('<label>Note</label>').clone().appendTo('#duplicater').val("");
	$('#ProductionCost0Note').clone().attr('name', 'data[ProductionCost][' + i + '][note]').appendTo('#duplicater').val("");
    $('#ProductionCost0CreateDate').clone().attr('name', 'data[ProductionCost][' + i + '][create_date]').appendTo('#duplicater');
    $('#ProductionCost0CreateBy').clone().attr('name', 'data[ProductionCost][' + i + '][create_by]').appendTo('#duplicater');
	}
</script>
