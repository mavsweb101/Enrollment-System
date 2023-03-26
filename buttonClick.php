<?php
require_once('../ClassDB.php');	
if(isset($_POST['add'])){
				
		$db = new classDB;
		$db->connect();
		$db->adduser();
			
			echo"<script>document.location='Setting_createaccount'</script>";
	}elseif(isset($_POST['set_add'])){
				
		$db = new classDB;
		$db->connect();
		$db->set_studid();
			echo "<script type='text/javascript'>alert('success');</script>
			<script>document.location='Setting_studID'</script>";
	}elseif(isset($_POST['set_date'])){
				
		$db = new classDB;
		$db->connect();
		$db->set_date();
			echo "<script type='text/javascript'>alert('success date');</script>
			<script>document.location='Setting_add-drop_date'</script>";
	}elseif(isset($_POST['subjectadd'])){
				
		$db = new classDB;
		$db->connect();
		$db->subjectadd();
		
	}elseif(isset($_POST['subjectupdate'])){
				
		$db = new classDB;
		$db->connect();
		$db->subjectupdate();
		
	}elseif(isset($_POST['course'])){
				
		$db = new classDB;
		$db->connect();
		$db->Add_Course();
	}elseif(isset($_POST['addschoolyear'])){
				
		$db = new classDB;
		$db->connect();
		$db->btnaddschoolyear();
	}
?>