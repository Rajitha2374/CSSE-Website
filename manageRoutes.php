
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $sid=$_POST['search'];
    $InsertEvaluation = $form->InsertEvaluation($_POST,$sid);
}
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DEL'])) {
    $sid=$_POST['search'];
    $InsertEvaluation = $form->InsertEvaluation($_POST,$sid);
}
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>TIXORA</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="css/multi-select.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
			<div class="logo">
                <a href="#" class="simple-text">
                    TIXORA
                </a>
            </div>
                <ul class="nav">
                <li >
                    <a href="addRoutes.php">
                        <i class="pe-7s-graph"></i>
                        <p>Add Routes</p>
                    </a>
                </li>
                <li class="active">
                    <a href="manageRoutes.php">
                        <i class="pe-7s-graph"></i>
                        <p>Manage Routes</p>
                    </a>
                </li>
              
				</ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">             
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!--Route Vice Income Percentage Section-->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Manage Route Details</h4>
                           </div>
                            <div class="content">
                                
                                
                                
                                
                                           
                <?php 
                        if(isset($InsertEvaluation)){
                            
                            echo $InsertEvaluation;
                        }
                 ?> 
                                <form id="contact-form" name="contact-form" action="manageRoutes.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="search" name="search" class="form-control">
                            <label for="name" class="">Route number</label>
                        </div>
                    </div>
                    
                    <div id="here"></div>
                    <!--Grid column-->
                    <button class="btn btn-success"  style="margin-left:800px;margin-bottom:-60px;">Update details</button>
                                    
                                  
                               <button class="btn btn-danger" onclick="return confirm('Are you sure to delete !')"  name="DEL" style="margin-left:1000px;"><em class="fa fa-trash"></em>Delete details</button>
                        

                </div>
                <!--Grid row-->
              
                                        <!--Grid row-->
                                    
                                    
                                    
                                    
                                    </form>
                               

                                                    </div>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                        </div>


</body>
	
	<!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.multi-select.js" type="text/javascript"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script>
        $('#my-select').multiSelect();
    
    </script>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
    
    <script type="text/javascript">
          $(document).ready(function(e){
              $("#search").keyup(function(){
                    $("#here").show();
                  var x =$(this).val();
                  $.ajax({
                      type:'GET',
                      url:'fetch.php',
                      data:'q='+x,
                      success:function(data){
                          $("#here").html(data);
                      }
                  });
              });
           
          });
          
          </script>


</html>
