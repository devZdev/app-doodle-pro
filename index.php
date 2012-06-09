<?php 
/*
 * 
 * 
 * 
 * @dz
 * Index - Landing Page / Home
 * echo '<pre>';
 * var_dump($_SERVER);exit;
 */
//jasonwrapper for early versions of PHP
require 'jsonwrapper.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php'?>
<body>
	
	<div id="wrapper">
		<?php include 'header.php'; ?>
		<div class="content">
			<?php include 'views/home.php'; ?>     
			<?php include 'sidebar.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
	</div>
	<?php include 'cart.php'; ?>
	<?php include 'scripts.php'; ?>
</body>
</html>
