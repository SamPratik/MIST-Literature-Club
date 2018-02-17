<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/scrollbar.css">
<link rel="stylesheet" href="css/social_links.css">
<link rel="stylesheet" href="css/footer.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Hall of Fame</title>

<style>
	
	div, img, h2, p, a, li, ul, span, nav, button, h1, h3, h4, strong, b, em, i {
		padding:0px;
		margin:0px;
		box-sizing:border-box;	
	}
	
	.content {
		position:relative;
	}
	
	.panel {
		box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);	
	}
	
	.panel-body {
		position:relative;	
		overflow:hidden;
	}
	
	.cover {
		background-color:rgba(0,0,0,0.0);
		position:absolute;
		display:block;
		top:0px;
		left:0px;
		bottom:0px;
		right:0px;	
		-webkit-transition:background-color .8s;
		transition:background-color .8s;
	}
	
	.panel:hover .cover {
		background-color:rgba(0,0,0,0.5);
		cursor:pointer;
	}
	
	.panel-body img {
		-webkit-transform:rotate(0deg) scale(1,1);
		transform:rotate(0deg) scale(1,1);
		-webkit-transition:-webkit-transform .8s;
		transition:transform .8s;	
	}
	
	.panel:hover img {
		-webkit-transform:rotate(30deg) scale(2,2);
		transform:rotate(30deg) scale(2,2);
	}
	
	@font-face {
		src:url(fonts/learning_curve_4.0/OpenType%20PostScript/learning_curve_bold_ot_ps.otf);
		font-family:learning_curve;
		font-weight:bold;
	}
	
	.heading {
		font-family:learning_curve;	
		font-weight:bold;
		font-size:80px;
		color:#145A32;
		margin-bottom:30px;
		text-shadow: 2px 2px 4px #000000;
	}
	
	.panel-footer {
		background-color:#dff0d8;	
		padding:20px 0px;
	}
	
	.panel-body {
		 padding:0px;	
	}
	
	.panel-heading {
		padding:20px 0px;	
	}
	
	.panel-heading h4 {
		text-shadow: 0px 0px 2px #000000;
	}

</style>

</head>

<body>

  <!------------START: SOCIAL LINKS------------->
  <?php include_once("social_links.php"); ?>
  <!------------END: SOCIAL LINKS------------->
	
    <!---------------START: HEADER--------------->
	<?php include_once("header.php"); ?>
    <!---------------END: HEADER--------------->
    
    <!---------------START: NAVBAR--------------->
    <?php include_once("navbar.php"); ?>
	<!---------------END: NAVBAR--------------->

    
    <!-----------START: CONTENT--------------->
    <div class="content container-fluid" style="position:relative;">
    
    	<div class="container">
        	
            <h1 class="text-center heading">Hall of Fame</h1>
            
        	<div class="row">
            	
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Rizal Fathony Kabir</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Rizal Fathony Kabir.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Chowdhury Raihan Uddin</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Chowdhury Raihan Hossain.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Tasin Nawer Shetu</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Tasin Nawr Shetu.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div style="clear:both;"></div>
                
            </div>
            
            <div class="row">
            	
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Samin Rahman</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Samin Rahman (1).jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Sakib Ur Rahman</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Sakib Ur Rahman.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Ebsana Saria</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Ebsana Saria.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h4 class="text-center">Tasnim Trina</h4></div>
                        <div class="panel-body">
                        	<img src="hall_of_fame_images/Tasnim Trina.jpg" style="width:100%">
                            <div class="cover"></div>
                        </div>
                        <!--<div class="panel-footer text-success">
                        	<p class="text-center">
                            	Former President<br/>
                                BUET, EECE-13
                            </p>
                        </div>-->
                    </div>
                </div>
                
                <div style="clear:both;"></div>
                
            </div>
        
        </div>
    
    </div>
    <!-----------END: CONTENT--------------->
    
    <!-------------START: FOOTER----------->
	<?php include_once("footer.php"); ?>
    <!-------------END: FOOTER----------->

    <script>
		document.getElementsByClassName("navbarBtn")[1].classList.add("active");
	</script>	
</body>
</html>