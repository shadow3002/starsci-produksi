		<div class="row">
		<div class="panel">
		<div id="iner1">
<?php echo $this->Form->create('ProductionCard'); ?>
	<fieldset>
		<legend><?php echo __('Add Production Card'); ?></legend>
	<?php
		echo $this->Form->input('ProductionCard.production_status_id', array('empty' => '--- Select Production Status ---', 'style' =>'width:25%'));
		echo $this->Form->input('ProductionCard.reactor_id', array('empty' => '--- Select Reactor ---', 'style' =>'width:20%'));
		echo $this->Form->input('ProductionCard.product_id', array('empty' => '--- Select Product ---', 'style' =>'width:20%'));
		echo $this->Form->input('ProductionCard.code', array());
		echo $this->Form->input('ProductionCard.standard_batch', array());
		echo $this->Form->input('ProductionCard.lot_no', array());
		echo $this->Form->input('ProductionCard.production_time', array());
		echo $this->Form->input('ProductionCard.nitrogen', array());
		echo $this->Form->input('ProductionCard.note', array());
	?>
	<div id='mydata'></div>
	<?php
		
		echo $this->Form->input('Packaging.pack_id', array('empty' => '--- Select Pack ---', 'style' =>'width:20%'));
		echo $this->Form->input('Packaging.std', array());
		echo $this->Form->input('Packaging.actual', array());
		echo $this->Form->input('Packaging.note', array());

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>

<?php
	    echo $this->Html->script('jquery-1.10.2');
?>
<!--
<script>
        $("#ProductionCardProductId").change(function() {   
            $.ajax({
      url : '/ProductionCards/action',
      type: 'POST',
      success : function(response){
        $('#elementToUpdate').html(response);
      }
        });

</script>
-->
<script>
$(function(){
    $('#ProductionCardProductId').change(function() {
    var q = $('#ProductionCardProductId').val();
    $.ajax({
        url: '/starsci-produksi/formulas/getdata',
        type: 'POST',

        data: {"product_id": q,
        success: function(data){
        $('#mydata').html(data);
            }
        }
    });
});
});
</script>