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
$uid=$_SESSION['adminid'];
$ret=mysqli_query($con,"select user_name from admin where id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['user_name'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboardADMIN.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                     
           <li class=""><a href="viewSTUDENTS.php"><em class="fa fa-users">&nbsp;</em>View Students</a></li>

           <li class=""><a href="viewLECTURER.php"><em class="fa fa-user-md">&nbsp;</em>View Lecturers</a></li>
           <li class=""><a href="viewPROJECTS.php"><em class="fa fa-folder">&nbsp;</em>View Documents</a></li>
           
 



            
            <li><a href="#"><em class="fa fa-user">&nbsp;</em>My Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>