<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid" style="margin-left: 25px;">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($conn, "select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#">Teachers</a><span class="divider">/</span></li>
							<li><a href="#"><b>Profile</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block"  style="box-shadow: none;">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<div class="alert alert-info"><i class="icon-info-sign"></i> About Me</div>
								<?php $query= mysqli_query($conn, "select * from teacher where teacher_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								$department_id = $row['department_id'];
						?>
  									<?php echo $row['about']; ?>
  									<!--Teacher Profile-->
  									<div class="span6">

  										<?php include 'display_teacher_profile.php'; ?>
  										
  									</div>

  									<!--Teacher Profile Edit-->
									<div class="span5">

  										<?php include 'edit_teacher_profile.php'; ?>
  										
  									</div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				<?php include('teacher_right_sidebar.php') ?>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>
</html>