<?php require('config.php'); 
session_start();?>
<?php
    if (!isset($_SESSION['emp_id'])){
    header("location:login.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inventory Management System</title>

    <link rel="stylesheet" href="assests/materialize_colors.css">

    <link rel="stylesheet" href="assests/bootstrap.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assests/style4.css">
    <script src="assests/jquery%20mini.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>


</head>

<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <div class="sidebar-header">
                <a href="index.php">
                    <h3 class="text-center">HERTZSOFT</h3>
                    <strong><img src="http://www.clker.com/cliparts/D/g/o/A/G/X/black-and-white-globe-md.png" alt="" height="40%" width="40%" alt=""></strong>
                </a>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="sales.php">
                        <i class="fas fa-briefcase"></i>
                        <span>Sales</span>
                    </a>
                </li>

                <li>
                    <a href="purchase.php">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>Purchase</span>
                    </a>
                </li>
                <li>
                    <a href="expense.php"><i class="fa fa-credit-card" aria-hidden="true"></i>
                        <span>Expense</span>
                    </a>
                </li>
                <li>
                    <a href="products.php"><i class="fa fa-cubes" aria-hidden="true"></i>
                        <span>Products</span>
                    </a>
                </li>

                <li>
                    <a href="customer.php"><i class="fa fa-users" aria-hidden="true"></i>
                        <span>Customers</span></a>
                </li>
                <li>
                    <a href="vendor.php"><i class="fa fa-industry" aria-hidden="true"></i>
                        <span>Vendors</span></a>
                </li>
                <li>
                    <a href="employee.php?"><i class="fa fa-laptop" aria-hidden="true"></i>
                        <span>Employees</span></a>
                </li>
                <!--            </ul>-->
            </ul>


        </nav>


        <!------------------- Page Content  -------------------->

        <div id="content">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <a><span id="sidebarCollapse" class="btn btn-dark">
                            <i class="fas fa-align-center"></i>
                        </span></a>


                    <!----------------------user-image-name-->
                    <!--
                    <div class="user-img-name d-flex align-items-center">

                      <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                       <div class="ml-2">    
                       
                    </div>        
                        <i class="fa fa-chevron-down ml-1" aria-hidden="true"></i>    
                        </div>   
-->
                
                   <div class="dropdown d-flex align-items-center">
                        <a href="#"><i class="fa fa-user-circle fa-2x mr-1" aria-hidden="true"></i></a>
                        
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo strtoupper($_SESSION['emp_first_name']." ".$_SESSION['emp_last_name']."-". $_SESSION['emp_designation']); ?>  
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        
                        <div class="dropdown-menu profiledrop dropdown-menu-right mt-2">
                            <a href="#" class="dropdown-item">View Account</a>
                            <a href="#" class="dropdown-item">Notifications</a>
                            <a href="login.php?logout" class="dropdown-item">Logout</a>
                            
                        </div>
                    </div>
                    
                   
                        
                    




                </div>
            </nav>
