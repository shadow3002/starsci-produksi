		<div class="row">
		<div class="panel">
		<div id="iner1">
		<p id="titles">Daftar User</p>
		<?php
			echo $this->Form->create();
			echo $this->Form->input('first_name');
			echo $this->Form->input('last_name');
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('password_confirmation', array('type'=>'password'));
			echo $this->Form->input('email');
			echo $this->Form->input('phone');
			echo $this->Form->input('alamat');
			echo $this->Form->input('group_user_id');
			echo $this->Form->end('Submit');
		?>
		</div>
	</div>
		</div>