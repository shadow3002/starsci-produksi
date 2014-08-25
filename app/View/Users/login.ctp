		<div class="row">
		<div class='form-2'>
		<h1><span class='log-in'>Login Form</span></h1>
		<p class='float'>
		<?php
		 echo $this->Form->create();
		 ?>
		 <?php echo $this->Form->input('username', array('placeholder' => 'Username', 'label' => ''));?></p>
		 <p class="float">
		<?php
         echo $this->Form->input('password', array('placeholder' => 'Password', 'label' => ''));
		?>
		</p>
        <?php 
		echo $this->Html->image($this->Html->url(array('controller'=>'users', 'action'=>'captcha'), true),array('id'=>'img-captcha','vspace'=>2));
		echo '<br><a href="#" id="a-reload">Can\'t read? Reload</a>';
		echo $this->Form->input('User.captcha',array('autocomplete'=>'off','label'=>false,'class'=>'', 'placeholder'=>'Input Captcha'));
		?>
		<p class="clearfix"> 
		<?php
		echo $this->Form->end('Login');
		?>
		</p>
		</div>
</div>


<script>
$('#a-reload').click(function() {
	var $captcha = $("#img-captcha");
    $captcha.attr('src', $captcha.attr('src')+'?'+Math.random());
	return false;
});
</script>