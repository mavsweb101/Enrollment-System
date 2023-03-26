<?php
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>ISU-JONES</title>
<link rel="stylesheet" type="text/css" href="css2.css" />
<style>
.table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #4CAF50;
        }
        th, td {
            
            padding: 10px;
            text-align: left;
        }
        tr:hover {
            background-color: #e5e5e5;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
            border: #4CAF50;
			width: 25%;
        }
		
        .btn {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
</style>
</head>
<body>

	
 
    <div class="container">
      
 <?php
 require_once('../ClassDB.php');

			if(isset($_POST['back'])){
				echo"<script>document.location='Home.php'</script>";
			}
			
		$id = $_REQUEST['id'];
			
			
			$db = new classDB;
			$db->connect();
			$db->report1();
 ?>
		

<form method="POST">
	<div>
	<input type="button" class="btn btn-info" value="print" id="print"/>
	
	<input type="submit" class="btn btn-info" value="Back" id="print1" name="back"/><br><br>
	</div>
	</form>
	<table  class="table" id="data" >
		<thead>
			<tr>
				<th>Student No</th>
				<th>Student Name</th>
				<th>Year</th>
				<th>Course</th>
			</tr>
		</thead>
		<tbody>
			
		<?php
			
			
			$db = new classDB;
			$db->connect();
			$db->showstudsub();
		
		?>
		</tbody>
	</table>
	</div>
	
</body>
   <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
</html>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#print').click(function(){
					$('#print,#print1').hide()
					window.print()
					$('#print,#print1').show()
				})
			
			
		
			
			})
			
      
     
    
</script>
			</script>
 