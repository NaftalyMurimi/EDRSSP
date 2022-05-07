<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<style type="text/css">
    #top{
        background-color: rgb(5, 17, 108);
    }
</style>
<nav id="top" class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="dashboard.php"><span>EDRSSP</span></a>
                
            </div>
            
        </div>
        <!-- /.container-fluid -->
    </nav>