<?php
    //$id1 = $_SESSION['id'];
    $id = 1;
    include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Vestium+
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
</head>

<body>
    <div id="top">

    </div>


    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">

            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="V+ logo" class="hidden-xs">
                    <img src="img/logo.png" alt="V+ logo" class="visible-xs"><span class="sr-only">Vestium+</span>
                </a>
                
            </div>
            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="customer-home.php">Home</a>
                    </li>
                    <li class="">
                        <a href="contact.html" class="" data-toggle="" data-hover="" data-delay="200">Contact US</a>
                    </li>
                    <li><a href="#">Get Experience</a>
                    </li>                  
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <div class="dropdown yamm-fw">
                        <a href="index.html" class="btn btn-primary navbar-btn">Sign Out </a>
                    </div>
                </div>
            </div>
        </div>   
        <!-- /.container -->
    </div>

    <div id="all">
                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My account</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-orders.html"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="customer-wishlist.html"><i class="fa fa-shopping-cart"></i> Shop Now</a>
                                </li>
                                <li>
                                    <a href="customer-account.html"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>
                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Designer</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM orders WHERE bID = '$id'";
                                        $rst = mysqli_query($conn,$sql);
                                        // if($rst){echo 1;}
                                        // else{echo 0;}
                                        if((mysqli_num_rows($rst))>0){
                                            while($row = mysqli_fetch_assoc($rst)){
                                                echo "<tr>";
                                                echo "<td>".$row['oNo']."</td>";
                                                echo "<td>".$row['date']."</td>";
                                                echo "<td>".$row['dID']."</td>";
                                                echo "<td>Rs. ".$row['eTotal']."</td>";
                                                if($row['status']=='on'){
                                                    if($row['dDate']==''){
                                                        echo "<td><span class='label label-info'>Being prepared</span></td>";
                                                    }
                                                    else{
                                                        echo "<td><span class='label label-success'>Received</span></td>";
                                                    }
                                                }
                                                else{
                                                    echo "<td><span class='label label-danger'>Cancelled</span></td>";
                                                }
                                                $a = $row['oNo'];
                                                echo "<td><a href='customer-order.php?id=$a' class='btn btn-primary btn-sm'>View</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
    </div>
            
            <!-- /.container -->
        
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        
   
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
