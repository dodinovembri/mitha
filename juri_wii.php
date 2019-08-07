<?php
	session_start();
	if ($_SESSION['id_role'] != 10) {
		header("location: index.php");
	}
	else
	{
		if (!isset($_GET['module']) || $_GET['module']==''){
			$_GET['module']='home'; 
		}	
	?>

	<?php  
		include 'module/templates/head.php';
		include 'module/juri_wii/templates/leftbar.php';
	?>

	<body class="hold-transition skin-yellow sidebar-mini"> 
	  <div class="wrapper">
	  	<?php require_once('module/juri_wii/'.$_GET['module'].'.php'); ?>
	  </div> 
	  <?php  
		include 'module/templates/footer.php';
	?>
	</body>

<?php } ?>
