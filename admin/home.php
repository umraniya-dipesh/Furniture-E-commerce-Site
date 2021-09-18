<?php
    session_start();
    require 'config.php';
    if($_SESSION['role']<>'admin')
    {       
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Admin</title>
        <?php include_once 'include-css.php'; ?>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include_once 'sidebar.php';?>
                <!-- page content -->
                <!-- <div class="right_col" role="main" style="min-height: 695px;"> -->
                <div class="right_col" role="main" style="min-height: 700px;">
                <!-- <div role="main"> -->
                    <!-- top tiles -->
                    <br />
                    <div class="row">
                        <div role="main">
                            <!-- top tiles -->
                            <h1 style="color:black;font-size:29px;text-align:center;">Welcome to Admin Panel</h1>
                            <hr>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-male"></i>
                                    </div>
                                    <div class="count">
                                        <?php
                                            $sql="select a_id from admin ORDER BY a_id";
                                            $res=mysqli_query($con,$sql);

                                            $row=mysqli_num_rows($res);

                                            echo '<h1>'.$row.'</h1>';

                                        ?>
                                    </div>
                                    <h3>Total Admin </h3>
                                </div>
                            </div>
                        </div>

                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-users"></i>
                                    </div>
                                    <div class="count">
                                                <?php
                                            $sql="select cust_id from customer ORDER BY cust_id";
                                            $res=mysqli_query($con,$sql);

                                            $row=mysqli_num_rows($res);

                                            echo '<h1>'.$row.'</h1>';

                                        ?>
                                    </div>
                                    <h3>Total Customer</h3>
                                </div>
                        </div>

                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-file-text-o"></i>
                                    </div>
                                    <div class="count">
                                                <?php
                                            $sql="select order_details_id from orders_details ORDER BY order_details_id";
                                            $res=mysqli_query($con,$sql);

                                            $row=mysqli_num_rows($res);

                                            echo '<h1>'.$row.'</h1>';
                                        ?>
                                    </div>
                                    <h3>Total order's</h3>
                                </div>
                        </div>
                    </div>
                <div id="top_x_div" style="width: 100%; height: 600px;"></div>
                <?php include_once 'footer.php';?> 
                
            </div>
        </div>

    </body>
</html>