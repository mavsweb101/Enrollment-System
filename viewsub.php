
<?php
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
error_reporting(0);
?>
<!Doctype html>
<html>
	<head>
	<style>

	

	
	</style>
	<link rel="stylesheet" type="text/css" href="css1.css" />
	<link rel="stylesheet" type="text/css" href="css2.css" />

	
	</head>
	<div style="margin-top:170px;">
		<?php
		include('header.php');
				require_once('../ClassDB.php');
	
								
								
				$db = new classDB;
				$db->connect();
				$db->viewsubjects_view();

	?>
	</div>
	<script src="bootstrap/js/npm.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
    
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="bootstrap/js/bootstrap-affix.js"></script>

    <script src="bootstrap/js/holder/holder.js"></script>
    <script src="bootstrap/js/google-code-prettify/prettify.js"></script>

    <script src="bootstrap/js/application.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    
     <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
	
	 <script>
      $(document).ready(function () {
        $("#data").DataTable();
      });
    
</script>

</body>
</html>




