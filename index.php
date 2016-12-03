
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Educativa - UFMS</title>

	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.fullpage/2.8.9/jquery.fullpage.min.css" />
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/css/nanoscroller.min.css" />
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css" />
	<link rel="stylesheet" type="text/css" href="css/radio.css" />
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

</head>
<body>

<div style="position:fixed;top:50px;left:50px;color:white;z-index:999;" id="callbacksDiv"></div>
   <nav id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand visible-xs" href="/" >Educativa UFMS</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li data-menuanchor="home" class="active"><a href="#home">início</a></li>
                            <li data-menuanchor="radio"><a href="#radio">a rádio</a></li>
                            <li data-menuanchor="equipe"><a href="#equipe">equipe</a></li>
<!---->

                            <li data-menuanchor="programacao"><a href="#programacao">programação</a></li>
                            <li data-menuanchor="contact"><a href="#contact">contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


		<div id="fullpage">

			<?php include 'sections/home.php'; ?>

			<?php include 'sections/sobre.php'; ?>

			<?php include 'sections/equipe.php'; ?>

			<?php include 'sections/programacao.php'; ?>

			<?php include 'sections/contato.php'; ?>

		</div>

		
		<!-- Scripts -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//cdn.jsdelivr.net/jquery.fullpage/2.8.9/jquery.fullpage.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#DAC500', '#1BBC9B', '#f1c40f', '#34495e', '#8e44ad'],
					menu: '#menu',
					anchors: ['home', 'radio', 'equipe', 'programacao', 'contact', 'lastPage'],
					responsiveWidth: 1100
				});
			});
		</script>


</body>
</html>

