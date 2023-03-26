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
	
<?php
	include('Header.php');
?>
	

	<div class="content-wrapper" style="margin-top:170px;">
        <div class="container">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-warning">
               
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
				<?php		
				require_once('../ClassDB.php');

					$db = new classDB;	
				$db->connect();
				$db->drop_add();
				?>




						
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			<?php
				
				if($_REQUEST['love']){
					$disp='';
				}else{
					$disp='none';
				}
				
				
				
				?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
		
            <form method="post">
            <div class="col-md-3" style="display:<?php echo $disp ?>">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<?php
								$ssid=$_REQUEST['id'];
								$yearlev=$_REQUEST['yearlev'];
								$sem=$_REQUEST['sem'];
								$course=$_REQUEST['course'];
								
							?>
							<label for="date">Add Subject</label><br>
								<input type="hidden" class="form-control" name="id" value="<?php echo $ssid ?>"required>
								<input type="hidden" class="form-control" name="yearlev" value="<?php echo $yearlev ?>" required>
								<input type="hidden" class="form-control" name="semester" value="<?php echo $sem ?>" required>
								<input type="hidden" class="form-control" name="course" value="<?php echo $course ?>" required>
								<input type="text" class="form-control" name="code" placeholder="Subject Code" required>
								<input type="text" class="form-control" name="desc" placeholder="Subject Description" required>
								<input type="text" class="form-control" name="unit" placeholder="Unit" required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
					
                  
                  <div class="row ">
                    <div class="col-xs-4 col-xs-offset-2">
                      <button class="btn btn-md btn-primary" id="daterange-btn" name="addadd" type="submit">
                        Add
                      </button>
					  </div>
					  <div class="col-xs-4">
					  <button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					<?php
						if(isset($_POST['addadd'])){
							$db=new classDB;
							$db->connect();
							$db->addadd();
						}
					 ?>
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				</form>	
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				 
				</div><!--hide-->
                </div><!-- /.box-body -->
					
			
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	
$(".delete").click(function(){
	var element = $(this);
	var del_id = element.attr("id");
	var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
  
   url: "drop_subject_del.php",
    type: "POST",
   data: info,
   success: function(){
	  
 }
});
	 $(this).parents("#sho").animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
	 
 }
return false;	

});
});
</script>
</body>
</html>



