
<!DOCTYPE html>
<html>
    

<head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>SLPIOT</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->

        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- Circlifull chart css -->
        <link href="assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>



    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                       

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title"> SLPIOT </li>

                            <li>
                                <a href="" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                 <a href="javascript:void(0);" class="waves-effect active"><i class="zmdi zmdi-collection-text"></i><span class="label label-warning pull-right">2</span><span> Station Details </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="WhetherStation/newStation">Add Station</a></li>
                                    <li><a href="WhetherStation/viewStation">View Station</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Forcasting </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="trash/chart-flot.php">Flot Chart</a></li>
                                    <li><a href="trash/chart-morris.php">Morris Chart</a></li>
                                    <li><a href="trash/chart-chartist.php">Chartist Charts</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>
                          

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        

                        <div class="row">
							<div class="col-lg-12">
								<div class="card-box">
                                    

                        			<h4 class="header-title m-t-0 m-b-30">World Map</h4>

									<div id="world-map-markers" style="height: 500px"></div>
								</div>
							</div><!-- end col -->
						</div>

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
        
        <!-- Circliful -->
        <script src="assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

         <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- main file -->
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="assets/pages/jquery.gmaps.js"></script>

        
        <!-- Jvector map js -->
        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        
    </body>

    <script>
    
    /**
 * Theme: Adminto Admin Template
 * Author: Coderthemes
 * VectorMap
 */

function getPoints(){
    $.ajax({
                    type: "GET",
                    url: "DashBoard/getDataCentersAll",
                    cache: false,
                    success:  function(data){
                        alert(data);
                        obj = JSON.parse(data);
                        
                        for(var i=0;i<obj.length;i++){
                            var id=obj[i]["stationID"];
                            var coo = obj[i]["coordintes"];
                            
                        }

                    },
                    error: function (error) {
                        alert("ERROR");
                    }
     });
}

! function($) {
	"use strict";
    var markers = [
    {latLng: [6.796877360197794, 79.90176200866699], name: "Katubadda", weburl : ""}
    ];
	var VectorMap = function() {
	};
	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#ea6c9c', '#ea6c9c'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#71b6f9'
				}
			},
            markers:markers,
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#a288d5',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 7,
                    'stroke-opacity': 0.4
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
            
		});
       
	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap
}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.VectorMap.init();
    $.VectorMap.addMarker(1, {coords: [100, 100]});
}(window.jQuery);

</script>

</html>