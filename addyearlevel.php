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
	
	<style>
		th{
			width:33.3%;
		}
	</style>
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
					$db->addyearlevel();
					
					
					

				?>




						
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            <form method="post">
            <div class="col-md-3" style="background-color:skyblue; border-radius:10px;">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<label for="date" style="margin-top:10px;">Add Year Level</label><br>
								<input type="text" class="form-control" name="yearlev" placeholder="Year Level" required>
								
							
						  </div><!-- /.form group -->
					</div>
				  </div>	
					
                  
                  <div class="row ">
                    <div class="col-xs-4 col-xs-offset-2">
                      <button class="btn btn-md btn-primary" id="daterange-btn" name="addyearlevel" type="submit">
                        Save
                      </button>
					  </div>
					  <div class="col-xs-4">
					  <button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					<?php
						if(isset($_POST['addyearlevel'])){
							$db=new classDB;
							$db->connect();
							$db->yearlev();
						}
					?> 
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				
				
				
				
                </div><!-- /.box-body -->
					</div><!-- /.box -->
					</form>	
					<?php
						if($_REQUEST['id']){
							$dis="";
						}else{
							$dis="none";
						}
					?>
					<form method="post">
            <div class="col-md-3" style="margin-top:10px;background-color:skyblue; border-radius:10px;display:<?php echo $dis ?>">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<label for="date" style="margin-top:10px;">Update Year Level</label><br>
								<input type="hidden" class="form-control" name="uid" value="<?php echo $_REQUEST['id'] ?>" required>
								<input type="text" class="form-control" name="uyearlev" value="<?php echo $_REQUEST['year'] ?>" required>
								
							
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="row ">
                    <div class="col-xs-4 col-xs-offset-2">
                      <button class="btn btn-md btn-primary" id="daterange-btn" name="subj" type="submit">
                        Update
                      </button>
					  </div>
					  <div class="col-xs-4">
					  <button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					 
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				
				
				
				
                </div><!-- /.box-body -->
					</div><!-- /.box -->
					</form>	
				
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	<?php
		if(isset($_POST['subj'])){
			$db = new classDB;
			$db->connect();
			$db->updateyearlev();
			
		}
	?>
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#data").DataTable();
      
      });
</script>
<script type="text/javascript">
$(document).ready(function() {
	
	
$(".delete").click(function(){
	var element = $(this);
	var del_id = element.attr("id");
	var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
  
   url: "delyearlevel.php",
    type: "POST",
   data: info,
   success: function(){
	  
 }
});
	 $(this).parents("#show").animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
	 
 }
return false;	

});
});
</script>
</body>
</html>



