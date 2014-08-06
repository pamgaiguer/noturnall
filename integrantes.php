<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/_seo.php'?>
	</head>

	<body>
	<?php include 'includes/_menunav.php'?>
		<div class="container">
			<img id="responsive-band" src="images/photo_topo.png" class="img-responsive">
			</div>
			<div class="jumbotron"> </div>					  
			<div class="container">
				<div id="bio-names">
					<span><a class="jcarelli">JUNINHO CARELLI</a></span>							
					<span><a class="fquesada">FERNANDO QUESADA</a></span>
					<span><a class="tbianchi">THIAGO BIANCHI</a></span>
					<span><a class="apriester">AQUILES PRIESTER</a></span>	
					<span><a class="lmancini">LÉO MANCINI</a></span>		
				</div>
				<br><br>
				
				<?php include 'includes/_biothi.php'?>
				<?php include 'includes/_bioleo.php'?>
				<?php include 'includes/_bioquesada.php'?>
				<?php include 'includes/_biojuninho.php'?>
				<?php include 'includes/_bioaquiles.php'?>											
				<!-- <div class="row">
					<div class="col-xs-12 col-md-7"></div>
					<div class="col-xs-12 col-md-5"></div>
				</div> -->
			</div>
		<br>
		<?php include 'includes/_footer.php'?>	
		
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments);
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m);
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-44501803-1', 'noturnall.com');
			ga('send', 'pageview');
		</script>
		<script>		
		$(document).ready(function() {
		    $(".tbianchi").click(function(){
				$("#tbianchi").toggle(0);
				$("#lmancini").hide();
				$("#fquesada").hide();
				$("#jcarelli").hide();
				$("#apriester").hide();
			});
		    $(".lmancini").click(function(){
				$("#tbianchi").hide();
				$("#lmancini").toggle(0);
				$("#fquesada").hide();
				$("#jcarelli").hide();
				$("#apriester").hide();
			});		
		    $(".fquesada").click(function(){
				$("#tbianchi").hide();
				$("#lmancini").hide();
				$("#fquesada").toggle(0);
				$("#jcarelli").hide();
				$("#apriester").hide();
			});		
		    $(".jcarelli").click(function(){
				$("#tbianchi").hide();
				$("#lmancini").hide();
				$("#fquesada").hide();
				$("#jcarelli").toggle(0);
				$("#apriester").hide();
			});		
		    $(".apriester").click(function(){
				$("#tbianchi").hide();
				$("#lmancini").hide();
				$("#fquesada").hide();
				$("#jcarelli").hide();
				$("#apriester").toggle(0);
			});
			
			function addScrolls () {
			 $("#bio-names span a").click(nameClick);
			}
			function nameClick  () {
			 var t = $(this);
			 var cls = t.attr("class");
			 var top = $("."+cls).position().top;
			 var ht = $("#"+cls).height();
			 //
			 if( ht < 10 ){
			  $("body").animate({scrollTop:top});
			 }
			}
			addScrolls();			
		});		
		
		</script>		
	</body>
</html>