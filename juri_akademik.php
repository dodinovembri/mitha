<?php
	session_start();
	if ($_SESSION['id_role'] != 5) {
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
		include 'module/juri/templates/leftbar.php';
	?>

	<body class="hold-transition skin-yellow sidebar-mini"> 
	  <div class="wrapper">
	  	<?php require_once('module/juri/'.$_GET['module'].'.php'); ?>
	  </div>
	  <?php  
		include 'module/templates/footer.php';
		?> 
	</body>

<?php } ?>
