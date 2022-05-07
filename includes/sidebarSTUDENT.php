<!-- This is mother's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../assets/download.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
               <?php
$uid=$_SESSION['studentuid'];
$ret=mysqli_query($con,"select FullName from students where id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                     
           <li class=""><a href="addFILE.php"><em class="fa fa-calendar">&nbsp;</em>Add file</a></li>
           <li class=""><a href="viewFILES.php"><em class="fa fa-calendar">&nbsp;</em>View Files</a></li>
           
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em>My Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>