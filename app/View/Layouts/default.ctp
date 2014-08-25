<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Star SCI'; ?>
	</title>
	<?php

		echo $this->Html->css('css/foundation');
	    echo $this->Html->script('js/vendor/modernizr');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<BODY>
		
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('auth'); ?>
		<div class="rowedited">
		<?php if(!($logged_in)): ?>
		<?php echo $this->Html->image('starsci.png'); ?>
		<?php endif; ?>
		<?php if($logged_in): ?>
		</div>
		<div class="rowedited">
		<p id='loginas'>Welcome <?php echo $current_user['username']; ?>, <?php echo $this->Html->link('Logout', array('controller' =>'users', 'action' => 'logout')); ?></p>
		
				<?php $prev = ''; ?>
		<ul id='menu'>
		<?php foreach ($modulmenu as $modul): ?>
			<li>
			<a href='#'><span>
				<?php echo $modul['F']['name']; ?></span></a>
					<ul>
					<?php foreach ($menuuser as $menu): ?>
						<?php 
								if($modul['F']['name'] == $menu['F']['name']){
						?>
								 <li>
								 <a href='#'><span>
														 <?php //untuk coba
														 // echo $prev == $menu['D']['name'] ?'': $menu['D']['name']; ?>
								
								<?php
								echo $menu['D']['name']; 
								}?></span></a>
									 <ul>
									 <?php foreach ($subsmenu as $menus): ?>
									 <?php if($menu['D']['name'] == $menus['D']['name']){ ?>
										 <li><?php echo $this->Html->link($menus['E']['name'], array('controller' =>$menus['E']['controller'], 'action' => $menus['E']['action'])); ?></li>
									<?php } ?>
									
									<?php endforeach; ?>
									</ul>
								</li>
													<?php //untuk coba
													// $prev = $menu['D']['name']; ?>
							<?php endforeach; ?>
							</ul>
						</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php // else: ?>
		<p id='loginas'><?php // echo $this->Html->link('Login', array('controller' =>'users', 'action' => 'index')); ?></p>
		<?php endif; ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div class='rowedited'>
		<footer>
		<center>
		<?php echo 'Copyright (c) 2014 Design by Lateriaguna'; ?>
		</center>
		</footer>
		</div>
		<?php echo $this->element('sql_dump'); ?>
			
</BODY>
</html>
