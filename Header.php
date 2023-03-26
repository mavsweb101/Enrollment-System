<!DOCTYPE html>
<html>
	<head>
		<style>
#header {
margin:50px;
}
#header ul {
	
	padding:0px 8px 0px 0px;
	list-style-type:none;
}
#header ul li {
	float:left;
	width:120px;
	height:30px;
	background-color:black;
	margin-right:4px;
	opacity:.8;
	line-height:30px;
	text-align:center;
	font-size:15px;
	border-left:10PX;
	border-radius:5px;
}
#header ul li a {
	text-decoration:none;
	color:white;
	display:block;
}
#header ul li:hover {
	background-color:gray;
}

#header ul li ul li {
	display:none;
	width:210px;;
}
#header ul li:hover ul li {
	display:block;

}

		</style>
	
	</head>
	<body style"background-color:gray;" id="bod">
	
	
	<div class="container">
			
		<div class="jumbotron navbar-fixed-top" style="background-size:cover;margin-top:0px;height:100px; background-color:#030;margin-left:-8px;margin-right:-8px;">
<center><img src="file/MAIN.png" style="margin-left:-55px;width:1005px;height:100px;margin-top:-50px;"/></center>
			
		
<div id="header" style="margin-top:-2px;">	
    	<ul>
        	<li><a href="Home"><img src="icon/home2.png" style="width:70px;"/></a></li>
            <li><a href="StudentRecord"><img src="icon/student.png" style="width:110px; margin-top:-9px;"/></a></li>
           
            <li><a href="drop_subject"><img src="icon/delete1.png" style="width:110px;"/></a> </l>
            
            <li><a href="#"><img src="icon/report.png" style="width:70px;"/></a>
				 <ul>
                  	<li><a href="#" data-toggle="modal" data-target="#bsit">Student Record</a></li>
                  	<li><a href="#" data-toggle="modal" data-target="#sub">Enrolled Student per Subject</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="icon/setting.png" style="width:70px;"/></a>
                <ul>
                  	<li><a href="Setting_studID">Set Student No</a></li>
                    <li><a href="Setting_add-drop_date">Set Date Add/Drop subject</a></li>
                    <li><a href="Setting_school_year">Set School Year & Semester</a></li>
                    <li><a href="Addcourse">Add Coures</a></li>
                    <li><a href="addyearlevel">Add Year Level</a></li>
                    <li><a href="Setting_createaccount">Create Acount</a></li>
                </ul>
            </li>
			
			
           
        </ul>
    
   </div>	
   <div style="background-color:black;height:45px;margin-left:-52px;margin-right:-52px;margin-top:-48px;">
			<a href="#" style="margin-top:0px;margin-right:100px;font-size:20px;text-decoration:none;color:white;" class="pull-right" data-toggle="modal" data-target="#myModal"><img src="icon/logout.png" style="width:70px;"/></a>
			<p style="float:right;color:white;margin-top:0px;margin-right:30px;">
			<?php
				echo 'Welcome'.' '. ucfirst($_SESSION["id"]);
			?>
			</p>
	</div>
			
		</div>
		
		</div>
			
<!-- Modal Logout-->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logout Confirmation</h4>
        </div>
        <div class="modal-body">
          <?php        
						if (isset($_POST['submit'])){
							if (($_POST['submit'] =='Yes')) {
								
							
								// destroy session
									session_start();
									session_destroy();
								?>
									<script type="text/javascript">
									<!--
										window.location="../index.php";

									//-->
									</script>
								<?php
						
								}
						}else{
								?>

									<form method="POST">
										<center>
											<b>Are you sure you want to Logout? </b> <br><br>
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Yes" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button> 
											</div>
										</center> 
									</form>
					<?php
					}
					?>
        </div>
      
      </div>
      
    </div>
  </div>
  
  <!--Modal IT-->
  <div class="modal fade" id="bsit" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select Year Level & Course</h4>
        </div>
        <div class="modal-body">
			<?php 
				require_once('../ClassDB.php');
						
							$db = new classDB;
							$db->connect();
							$db->date_term();
			?>

									<form method="POST">
										<center>
											<span>Course
												
												<select name="course" style="width:70%!important;margin-left:20px;" required>
													<option value="">Select Course</option>
													<?php	
														
														$db = new classDB;
														$db->connect();
														$db->course();
													?>
														
												</select>
											</span> <br><br>
											<span>Year Level
												
												<select name="year" style="width:70%!important" required>
													<option value="">Select Year Level</option>
														
													<?php	
														require_once('../ClassDB.php');
														$db = new classDB;
														$db->connect();
														$db->year_level();
													?>
												</select>
											</span> <br><br>
											
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Display" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button> 
											</div>
										</center> 
									</form>
					
        </div>
      
      </div>
      
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <!--Modal SUBJECT-->
  <div class="modal fade" id="sub" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Search Year Level</h4>
        </div>
        <div class="modal-body">
          
			<?php 
				require_once('../ClassDB.php');
						if(isset($_POST['sub'])){
							$course=$_POST['course'];
							$subject=$_POST['subject'];
							$level=$_POST['level'];
							$sem=$_POST['sem'];
						echo"<script>document.location='studentsubjectenrolled.php?subject=$subject&id=$course&level=$level&sem=$sem'</script>";
						}	
							
			?>

									<form method="POST">
										<center>
											<span>Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input style="width:70%!important" required type="text" name="subject" placeholder="Subject Code"/>
										
										</select>
											</span> <br><br>
											<span>Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<select name="course" style="width:70%!important" required>
											<option value="">Select Year</option>
											<?php
										
														$db = new classDB;
														$db->connect();
														$db->course();
											
											?>
										</select>
											</span> <br><br>
											<span>Year Level
										<select name="level" style="width:70%!important" required>
											<option value="">Select Year</option>
											<?php
										
														$db = new classDB;
														$db->connect();
														$db->year_level();
											
											?>
										</select>
											</span> <br><br>
											<span>Semester
										<select name="sem" style="width:70%!important" required>
											<option value="">Select Semester</option>
											<option value="First Sem">First Sem</option>
											<option value="Second Sem">Second Sem</option>
											<option value="Sum">Sum</option>
											
										</select>
											</span> <br><br>
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="sub" value="Display" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button> 
											</div>
										</center> 
									</form>
					
        </div>
      
      </div>
      
    </div>
  </div>
  

   </body>
   
   </html>