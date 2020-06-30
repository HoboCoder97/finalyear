<?php
session_start();
?>
<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        The Grand Magnus
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="red">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">

            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
               The Grand Magnus
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="./pages/stocks/index.php">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Stocks</p>
                    </a>
                </li>
                <li>
                    <a href="./pages/ml/index.php">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Machine Learning</p>
                    </a>
                </li>

                <li>
                    <a href="./pages/profile/index.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="./pages/models/index.php">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>NASDAQ Codes</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="./actions/logout.php">
                        <i class="now-ui-icons media-1_button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm">
            <canvas id="bigDashboardChart"></canvas>
        </div>
        <div class="content">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Stock Prices</h5>
                            <h4 class="card-title">All stocks</h4>
                            <div class="dropdown">
                                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                    <i class="now-ui-icons loader_gear"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="./actions/tick.php?q=1">Open</a>
                                    <a class="dropdown-item" href="./actions/tick.php?q=2">High</a>
                                    <a class="dropdown-item" href="./actions/tick.php?q=3">Low</a>
                                    <a class="dropdown-item" href="./actions/tick.php?q=4">Close</a>
                                    <a class="dropdown-item" href="./actions/tick.php?q=5">Volume</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <form method="post" action="actions/code.php">
                                <input id="txtHint" name="code" type="text" placeholder="Enter Stock Code" >
                                <button type="submit">Update</button>
                                </form>
                                <script>
                                    function showCustomer(str) {


                                        var xhttp;
                                        if (str === "") {
                                            document.getElementById("txtHint").innerHTML = "";
                                            return;
                                        }
                                        xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState === 4 && this.status === 200) {
                                                document.getElementById("txtRes").innerHTML = this.responseText;

                                            }
                                        };
                                        xhttp.open("GET", "./action/search.php?q="+str, true);
                                        xhttp.send();
                                    }
                                </script>


                                <?php
                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);
                                require("../vendor/autoload.php");
                                use AlphaVantage\Client;

                                    if (isset($_SESSION['code'])){
                                                $symbol = $_SESSION['code'];
                                    }
                                    else {
                                                $symbol = 'IBM';
                                    }
                                $alpha_vantage = new Client('07CVP2GNLNU5KZ5Y');
                                $data = $alpha_vantage
                                    ->stock()
                                    ->intraday($symbol, AlphaVantage\Resources\Stock::INTERVAL_1MIN);
                             // echo '<pre>'; print_r($data); echo '</pre>';

                               $dataPoints = array();
                               $minimum = 999999999999999;
                               $maximum = 0;
                                foreach ($data['Time Series (1min)'] as $time => $tick) {
                                    array_push($dataPoints, array("x" => strtotime($time), "label" => $time, "y" => (float) $tick['4. close']));
                                    if ($tick['4. close'] < $minimum){
                                        $minimum = $tick['4. close'];
                                    }
                                    if ($tick['4. close'] > $maximum){
                                        $maximum = $tick['4. close'];
                                    }
                                }

                                ?>

                                    <script>
                                        window.onload = function () {

                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                theme: "dark2", // "light1", "light2", "dark1", "dark2"
                                                animationEnabled: true,
                                                zoomEnabled: true,
                                                beginAtZero: false,
                                                axisY:{
                                                    minimum: <?php echo $minimum-1;?>,
                                                    maximum: <?php echo $maximum+1; ?>,
                                                },
                                                title: {
                                                    text: "Data of <?php echo $symbol;?>"
                                                },
                                                data: [{
                                                    type: "line",
                                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                }]
                                            });
                                            chart.render();

                                        }
                                    </script>
<br/>
                                <div id="chartContainer" style="height: 600px; width: 100%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                                <?php

                                ?>

                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="./assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>
