<!-- This is mother's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../assets/lec.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
               <?php
$uid=$_SESSION['lecuid'];
$ret=mysqli_query($con,"select Lecturer_name from lecturer where id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['Lecturer_name'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboardLECTURER.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                     
           <li class=""><a href="sampleUPLOAD.php"><em class="fa fa-calendar">&nbsp;</em>Submit Sample</a></li>

           <li class=""><a href="viewfiles.php"><em class="fa fa-calendar">&nbsp;</em>View Files</a></li>
           
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em>My Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>