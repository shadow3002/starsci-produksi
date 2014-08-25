<?php echo $this->Html->css('styles'); ?>
<div id = "bordersatu">
<?php echo $this->Html->image('starsci.png', array('height' => '229px', 'width'=>'1200px')); ?>
</div>
<div id='borderone'>
	<div id="iner">
	<h2>Login Form</h2>
		<?php
		 echo $this->Form->create();
		 echo $this->Form->input('username');
		 echo $this->Form->input('password');
	?>
	
         <?php 
		echo $this->Html->image($this->Html->url(array('controller'=>'users', 'action'=>'captcha'), true),array('id'=>'img-captcha','vspace'=>2));
		echo '<p><a href="#" id="a-reload">Can\'t read? Reload</a></p>';
		echo '<p>Masukkan kode di atas:</p>';
		echo $this->Form->input('captcha',array('autocomplete'=>'off','label'=>false,'class'=>''));				
		echo $this->Form->end('Login');
		?>
		
	</div>
</div>


<script>
$('#a-reload').click(function() {
	var $captcha = $("#img-captcha");
    $captcha.attr('src', $captcha.attr('src')+'?'+Math.random());
	return false;
});
</script>