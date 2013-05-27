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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CLINUX');
?>
<?php echo $this->Html->docType('html5');?>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
  		<!-- If you are using CSS version, add this -->
		<?php
			echo $this->Html->meta('icon');
			echo $this->fetch('meta');

			echo $this->Html->css(array('normalize','foundation','app', 'cake.generic'));
			echo $this->fetch('css');

			echo $this->Html->script('vendor/custom.modernizr');
		?>
	</head>
	<body>
		<div id="container">
			<!-- If you'd like some sort of menu to show up on all of your views, include it here -->
			<div id="header">
				<div id="menu"></div>
				<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<!-- Here's where I want my views to be displayed -->
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<!-- Add a footer to each displayed page -->
			<div id="footer">
				<?php echo $this->Html->link(
						$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
						'http://www.cakephp.org/',
						array('target' => '_blank', 'escape' => false)
					);
				?>
			</div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
		<script>
		  	document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>')
		</script>
		<?php
			echo $this->Html->script(
				array(
					'foundation/foundation',
					'foundation/foundation.alerts',
					'foundation/foundation.clearing',
					'foundation/foundation.cookie',
					'foundation/foundation.dropdown',
					'foundation/foundation.forms',
					'foundation/foundation.joyride',
					'foundation/foundation.magellan',
					'foundation/foundation.orbit',
					'foundation/foundation.placeholder',
					'foundation/foundation.reveal',
					'foundation/foundation.section',
					'foundation/foundation.tooltips',
					'foundation/foundation.topbar'
				)
			);
		?>
		<script>
			$(document).foundation();
		</script>
		<?php echo $this->fetch('script'); ?>
	</body>
</html>