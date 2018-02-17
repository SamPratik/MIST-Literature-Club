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
<link rel="icon" href="images/for website.jpg">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/countdown.js"></script>
<title>MIST LCC</title>

<style>

	.jumbotron p {
		color:black;	
	}
	
	.circle a {
		text-decoration:none;
		height:170px;
		width:170px;
		padding:70px 0px;
		border-radius:50%;
		background-color:#E9F7EF;	
		margin:auto;
		display:block;
		position:relative;
		box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);
		text-align:center;
		-webkit-transform:scale(1,1);
		transform:scale(1,1);
		-webkit-transition: -webkit-transform .5s;
		transition: transform .5s;
		/*transition:height .5s, width .5s;*/
	}
	
	.circle a:hover {
		-webkit-transform:scale(1.2,1.2);
		transform:scale(1.2,1.2);
	}
	
	.about-us {
		background-color:#E9F7EF;	
		padding:70px 0px;
		margin-top:-20px;
	}
	
	.about-us-caption {
		text-shadow: 2px 2px 2px #000000; 
		color:#145A32; 
		font-weight:bold;
	}
	
	.about-us-text {
		line-height: 2.0;
		font-size: 22px;
		word-spacing: 3px;
		letter-spacing: 0px;
		margin-top: 35px;	
	}
	
	.notice-breaking-news {
		background-color:#E9F7EF;
		padding:50px 0px;
	}
	
	.notice-breaking-news h2 {
		margin-bottom:30px;	
	}
	
	.notice {
		overflow-y:scroll;
		height:350px;	
	}
		
	.jumbotron {
		background-color:#E9F7EF;	
	}
	
	.list-group a {
		background-color:#E9F7EF;
	}
	
	.list-group a:hover {
		background-color:#fff;
		color:#145A32;
	}
	
	.breaking-news-title {
		color:red;	
	}
	
	.notice a {
		color:blue;	
	}
		
	/***************START: JSSOR SLIDER CSS***********************/		
		.jssora08l, .jssora08r {
			display: block;
			position: absolute;
			/* size of arrow element */
			width: 50px;
			height: 50px;
			cursor: pointer;
			background: url('img/a08.png') no-repeat;
			overflow: hidden;
			opacity: .4;
			filter: alpha(opacity=40);
		}
		.jssora08l { background-position: -5px -35px; }
		.jssora08r { background-position: -65px -35px; }
		.jssora08l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
		.jssora08r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
		.jssora08l.jssora08ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
		.jssora08r.jssora08rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
		.jssora08l.jssora08lds { background-position: -5px -35px; opacity: .3; pointer-events: none; }
		.jssora08r.jssora08rds { background-position: -65px -35px; opacity: .3; pointer-events: none; }
	/***************END: JSSOR SLIDER CSS***********************/	
	
	@media screen and (max-width:993px) {
		.jumbotron {
			background-color:#fff;	
		}
		
		.notice-container {
			margin-top:30px;	
		}
	}

</style>

<!----------------START: JSSOR SLIDER JS----------->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-23.1.6.mini.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_options = {
          $AutoPlay: 1,
          $DragOrientation: 2,
          $PlayOrientation: 2,
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 800);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
    });
	
	
</script>
<!----------------END: JSSOR SLIDER JS----------->
  
</head>
<body>
  
  <!------------START: SOCIAL LINKS------------->
  <?php include_once("social_links.php"); ?>
  <!------------END: SOCIAL LINKS------------->
  

	<!---------START: HEADER---------->
	<?php include_once("header.php"); ?>
    <!---------END: HEADER---------->
    
    

	<!------------START: NAVIGATION BAR-------------->
	<?php include_once("navbar.php"); ?>
    <!------------END: NAVIGATION BAR-------------->


	<!------------START: CONTENT-------------->
    <div class="content container-fluid" style="position:relative;"><!---border:1px solid black;----->
        
        
        
        <!-----------START: ABOUT US--------->
        <div class="row about-us">
        
        	<div class="container">
            
            	<h1 class="text-center about-us-caption" style="">ABOUT US</h1>
                <p class="about-us-text text-center">
MIST Literature & Cultural Club is one of the leading and prominent student organizations of Military Institution of Science & Technology. All the creative and cultural minded students of the institution bond here. The club was formed in late 2014. Since 2015 the club has been hosting 'Falgun Utsab' and numerous literature and cultural based events and workshops. Nowadays MIST Literature & Cultural Club is performing through six dedicated teams covering all the sectors of literature and culture. From the very beginning the club is creating various opportunities to practice literature, art and culture. <br/>

Literature and Culture holds the true identity of a civilization or a society. It can drive and inspire an individual to think and make a better change. MIST Literature and Cultural Club believes technology and creativity do not contradict each other –rather both of them contribute to proper manifestation of a student. To uphold this belief, MIST Literature and Cultural Club has gloriously threaded its way far by inspiring and involving students of our technological institute.<br/>

Now, it has also become a platform for inquisitive individuals to show their latent talent, to shine their knowledge on our culture and literature and excel at better human being.<br/>
                </p>
            
            </div>
        
        </div>
        <!-----------END: ABOUT US--------->
        
        
        
        <!-----------START: CIRCLE-CONTAINER--------->
        <div class="row circle-container" style="padding:20px 100px 50px 100px;">
        
        		<h1 class="text-center" style="text-shadow: 2px 2px 2px #000000; color:#145A32; font-weight:bold; margin-bottom:30px;">ACTIVITIES</h1>
        
            <!--<div class="circle-container" style="padding:50px 100px;">--><!---border:1px solid black;----->
           
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">আনন্দলোক</h2>
                    </a>
                </div>
                
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">অগ্নিবিনা</h2>
                    </a>
                </div>
                
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">Celluloid</h2>
                    </a>
                </div>
                
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">ছন্নছাড়া</h2>
                    </a>
                </div>
                
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">চারকোল</h2>
                    </a>
                </div>
                
                <div class="col-md-2 circle">
                    <a href="#">
                    	<h2 class="text-success">অবনীল</h2>
                    </a>
                </div>
                
                <div style="clear:both;"></div>
            
            <!--</div>-->
            
        </div>
        <!-----------END: CIRCLE-CONTAINER--------->
        
        
        <!----------START: NOTICE & BREAKING NEWS---------->
        <div class="row notice-breaking-news">
        
            <div class="container">
            
            	<!----------START: BRAEKING NEWS (col-md-6)------->
                <div class="col-md-6 breking-news" style="padding:0px;">
                
                	<h2 class="text-center" style="text-shadow:2px 2px 2px #000000;color:#145A32;font-weight:bold;">BREAKING NEWS</h2>
                
                    <div id="jssor_1" style="position:relative;top:0px;left:0px;width:600px;height:350px;overflow:hidden;visibility:hidden;">
                    
                    <!-- Loading Screen -->
                        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        	<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        	<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                    	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:350px;overflow:hidden;">
                    
                    
                            <div class="jumbotron">
                                <h2 class="breaking-news-title">Aunkur - 2017 registration opens at 25 June.</h2>
                                <p>Register for participating in Aunkur -2017 and bring home the largest prize money for your talent! <a href="https://registration.mistlcc.com/" target="_blank">Register Here</a></p>
                                <!--<a class="btn btn-primary pull-right" href="#">View More</a>--> 
                            </div>
                            <div class="jumbotron container">
                                <h2 class="breaking-news-title">Visitors Have to Register too for visitng MIST premises on the event day</h2>
                                <p>As MIST is in a cantonment area, you have to register and provide correct information to get a DGFI clearance to Enter MIST premises. <a href="https://registration.mistlcc.com/visitor/" target="_blank">Register Here</a></p>
                                <!--<a class="btn btn-primary pull-right" href="#">View More</a> -->
                            </div>
                            
                            
                    	</div>
                        <a data-u="any" href="https://www.jssor.com" style="display:none">html carousel</a>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora08l" style="top:8px;left:8px;width:50px;height:50px;" data-autocenter="1"><i class="fa fa-arrow-circle-up" aria-hidden="true" style="font-size:50px;"></i></span>
                        <span data-u="arrowright" class="jssora08r" style="bottom:8px;right:8px;width:50px;height:50px;" data-autocenter="1"><i class="fa fa-arrow-circle-down" aria-hidden="true" style="font-size:50px;"></i></span>
                        
                        
                    </div>
                    
                </div>
                <!----------END: BRAEKING NEWS (col-md-6)------->

                
                
                <!----------START: NOTICE (col-md-4)------->
                <div class="col-md-6 notice-container" style="padding:0px;position:relative;">
                	
                    <h2 class="text-center" style="text-shadow:2px 2px 2px #000000;color:#145A32;font-weight:bold;">NOTICES</h2>
                    
                    <div class="list-group notice">
                        <a href="https://registration.mistlcc.com/" class="list-group-item" target="_blank">Registration Opens for Aunkur - 2017.</a>
                        <a href="rule_books/phototale rulebook.pdf" class="list-group-item" target="_blank">Call for Submission for Phototale</a>
                        <a href="https://mistlcc.com/aunkur.php" class="list-group-item" target="_blank">Aunkur, the biggest Cultural Fest in University Level will be held on 29 July,2017</a>
                        <a href="rule_books/short film rulebook.pdf" class="list-group-item" target="_blank">Submit Your Short Films within 6th of July for Aunkur - 2017</a>
                        <a href="https://mistlcc.com/aunkur.php" class="list-group-item" target="_blank">Event Details Updated for Aunkur - 2017</a>
                        <a href="rule_books/Rongmeshali rulebook.pdf" class="list-group-item" target="_blank">Announcement for Rong meshali</a>
                        <a href="rule_books/Cultural Case rulebook.pdf" class="list-group-item" target="_blank">Case for Cultural Case Competition Published</a>
                        
                    </div>    
                    
                </div>
                <!----------END: NOTICE (col-md-4)------->
            
            </div>	
            
        </div>
        <!----------END: NOTICE & BREAKING NEWS---------->
        
      	<!------START: COUNTDOWN----------->
		<?php include_once("countdown.php"); ?>
        <!------END: COUNTDOWN----------->

		
        
    </div>
    <!------------END: CONTENT-------------->
   
    <!-------------START: FOOTER----------->
	<?php include_once("footer.php"); ?>
    <!-------------END: FOOTER----------->
    
    <!-------------START: CREDIT----------->
    <?php include_once("credit.php"); ?>
    <!-------------END: CREDIT----------->
    
    
    <script>
		document.getElementsByClassName("navbarBtn")[0].classList.add("active");
	</script>
</body>
</html>