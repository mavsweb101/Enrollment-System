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
	
	<link rel="stylesheet" type="text/css" href="css1.css" />
	<link rel="stylesheet" type="text/css" href="css2.css" />

	
	</head>
	<div class="container" style="margin-top:170px;">
<?php
	include('Header.php');
	 require_once('../ClassDB.php');
	 
	if(isset($_POST['Addnew'])){
				echo"<script>document.location='AddStudnew'</script>";
			}
	if(isset($_POST['Addold'])){
				echo"<script>document.location='AddStudold'</script>";
			}
?>	
	<form method="POST">
	<input name="Addnew" class="btn btn-primary" type="submit" value="Enroll New Student"/>
	<input name="Addold" class="btn btn-primary" type="submit" value="Enroll Old Student"/><br><br>
	</form>
	<table  class="table" id="table" style="margin-top:20px;">
		<thead>
			<tr>
				<th>Student No</th>
				<th>Student Name</th>
				<th>Year</th>
				<th>Course</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
		<?php
			
			
			$db = new classDB;
			$db->connect();
			$db->showstudent();
		?>
		</tbody>
	</table>
	</div>



	

	
	
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#table").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
</script>
</body>
</html>



