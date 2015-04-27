<?php
require_once ('config/connection.php');
	if (!isset($_SESSION)) {
		session_start();
	}

$query = "SELECT dts_date, dts_local, dts_city_state
	FROM dates
	WHERE dts_active = 1
	ORDER BY dts_id desc";
	mysql_select_db('noturnall');

	$result = mysql_query($query);

	$rows = array();
	while ($row = mysql_fetch_assoc($result)) {
		array_push($rows, $row);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/_seo.php';?>
</head>
<body>
	<div id="fb-root"> </div>
	<script>
		( function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=353187051446706";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<?php include 'includes/_menunav_en.php';?>
	<?php include 'includes/_photo_banda.php';?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<br>
				<div id="last-news">
					<img src="images/noturnall-simbolo.png"><span>LATEST NEWS</span>
					<br>
					<hr>
					<div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
						<div class="fb-like-box" data-href="https://www.facebook.com/noturnall" data-width="560" data-height="1000" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"> </div>
					</div>
					<br>
					<hr>
					<br>
				</div>
				<div id="soundcloud">
					<img src="images/noturnall-simbolo.png"><span>NOTURNALL AT SOUNDCLOUD</span>
					<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/149249758&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					<br>
					<hr>
					<br>
				</div>
				<div id="youtube-channel">
					<img src="images/noturnall-simbolo.png"><span>NOTURNALL CHANNEL</span>
					<div class="flex-video widescreen">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/qIRzcTpgiXA" frameborder="0" allowfullscreen class="center-block"></iframe>
					</div>
					<br>
					<br>
					<hr>
					<div class="flex-video widescreen" style="margin: 0 auto; text-align:center">
						<iframe width="560" height="315" src="//www.youtube.com/embed/etjQWAm84rw" frameborder="0" allowfullscreen class="center-block"></iframe>
					</div>
					<br>
					<br>
					<hr>
					<div class="flex-video widescreen" style="margin: 0 auto; text-align: center;">
						<iframe width="560" height="315" src="//www.youtube.com/embed/Uam-uWJq5fc" frameborder="0" allowfullscreen class="center-block"></iframe>
					</div>
					<br>
					<br>
					<hr>
					<div class="flex-video widescreen" style="margin: 0 auto; text-align: center;">
						<iframe width="560" height="315" src="//www.youtube.com/embed/WLiWi63Gu84" frameborder="0" allowfullscreen class="center-block"></iframe>
					</div>
					<br>
					<br>
					<hr>
					<div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
						<iframe width="560" height="315" src="http://www.youtube.com/embed/ThADt6FMzBc" frameborder="0" class="center-block"> </iframe>
					</div>
					<Br>
						<br>
						<hr>
						<div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
							<iframe width="560" height="315" src="//www.youtube.com/embed/VYHy1i-XKo4" frameborder="0" class="center-block"> </iframe><br>
						</div>
						<span style="font-size: 24px;">SEE ALL THOSE VIDEOS ON OUR CHANNELL <a href="http://www.youtube.com/channel/UC_iaU7yqpRG5QASwN2dM_jA/videos" target="_blank"><img src="images/youtube-icon.png"></a></span>
					</div>
					<hr>
				</div>
				<div class="col-xs-12 col-md-5">
					<br>
					<div id="tour-dates" class="table-responsive">
						<img src="images/noturnall-simbolo.png"><span>TOUR DATES</span>
						<table class="text-center">
							<thead>
								<th class="text-center">Data</th>
								<th class="text-center">Local</th>
								<th class="text-center">Cidade</th>
							</thead>
							<tbody>
								<?php foreach($rows as $key => $val){
									echo "
									<tr>
										<td>{$val['dts_date']}</td>
										<td>{$val['dts_local']}</td>
										<td>{$val['dts_city_state']}</td>
									</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
					<hr>
					<div id="facebook-page" class="text-justify">
						<img src="images/noturnall-simbolo.png"><span>ENDORSEMENTS</span>
						<br>
						<a href='http://www.adidas.com.br' target='_blank'> Adidas </a> |
						<a href='http://br.akg.com/akg-homepage-br.html' target='_blank'> AKG Microphones </a> |
						<a href='http://www.ask.ind.br/produtos/15/racks' target='_blank'> ASK Racks </a> |
						<a href='http://bossinfo.roland.com.br/' target='_blank'> Boss </a> |
						<a href='http://www.casio-intl.com/br/pt/emi/standard/' target='_blank'> Casio Keyboards </a> |
						<a href='http://www.chiaraguitarshop.com.br/default.aspx' target='_blank'> Chiara Guitar Shop </a> |
						<a href='http://www.consuladodorock.com.br/' target='_blank'> Consulado do Rock </a> |
						<a href='http://www.diehard.com.br' target='_blank'> Die Hard - Classic Rock and Heavy Metal Collectibles</a> |
						<a href='http://www.drstrings.com/' target='_blank'> DR Strings </a> |
						<a href='http://www.dwdrums.com/' target='_blank'> DW Pedals </a> |
						<a href='http://www.eagleinstrumentos.com.br/default_eagle.asp	' target='_blank'> Eagle Guitars </a> |
						<a href='http://www.eagleinstrumentos.com.br/default_eagle.asp	' target='_blank'> Eagle Instruments </a> |
						<a href='http://www.territoriodamusica.com/emt/	' target='_blank'> EM&T </a> |
						<a href='http://www.evansdrumheads.com/EvansHome.Page?ActiveID=1194&sid=122377cf-8415-4559-822f-dc337e362299' target='_blank'> Evans Drum Heads </a> |
						<a href='http://www.eventelectronics.com/	' target='_blank'> Event Monitors </a> |
						<a href='http://www.foggyfilmes.com/' target='_blank'> Foggy Films </a> |
						<a href='http://www.fuhrmann.com.br/	' target='_blank'> Furhmann Pedals </a> |
						<a href='#' target='_blank'> Fusão Estudios </a> |
						<a href='http://www.gibraltarhardware.com/	' target='_blank'> Gibraltar Hardware </a> |
						<a href='http://hkaudio.com/	' target='_blank'> HK Audio </a> |
						<a href='http://jblpro.com/' target='_blank'> JBL Monitors </a> |
						<a href='http://www.ladysnake.com.br/	' target='_blank'> Lady Snake Rock Wear </a> |
						<a href='http://www.lpmusic.com/' target='_blank'> LP Percussion </a> |
						<a href='http://www.lyco.com.br/headphones.html	' target='_blank'> Lyco Headphones </a> |
						<a href='http://www.mapexdrums.com/' target='_blank'> Mapex Drums </a> |
						<a href='http://www.paiste.com/' target='_blank'> Paiste Cymbals </a> |
						<a href='http://www.peavey.com/' target='_blank'> Peavey Amplifiers </a> |
						<a href='http://www.pinnaclebroadcast.com.br/default.aspx?id=pt	' target='_blank'> Pinnacle Broadcast </a> |
						<a href='http://www.planetwaves.com/PWHome.Page?ActiveID=1193	' target='_blank'> Planet Waves Cables </a> |
						<a href='http://www.powerclick.com.br/' target='_blank'> Power Click </a> |
						<a href='http://www.promark.com/pmHome.Page?ActiveID=3745&sid=122377cf-8415-4559-822f-dc337e362299' target='_blank'> Pro-Mark Sticks </a> |
						<a href='http://www.rodemic.com/' target='_blank'> Røde Microphones </a> |
						<a href='http://roland.com.br/' target='_blank'> Roland </a> |
						<a href='http://portal.royalmusic.com.br/' target='_blank'> Royal Music </a> |
						<a href='http://www.santoangelo.com.br/	' target='_blank'> Santo Angelo Cables </a> |
						<a href='http://www.steinberg.com'>Steinberg</a> |
						<a href='http://www.solez.com.br/' target='_blank'> Solez Strings </a> |
						<a href='http://www.tecniforte.com.br/' target='_blank'> Tecniforte Cables </a> |
						<a href='http://www.umbro.com/pt-br/' target='_blank'> Umbro </a> |
						<a href='http://aquilespriester.com.br/' target='_blank'> Urban Boards PsychoShoes and Xtreme Ears </a> |
						<a href='http://www.yamaha.com.br' target="_blank"> Yamaha </a> |
					</div>
					<hr>
					<div id="info-album">
						<img src="images/noturnall-simbolo.png"><span>NEW ALBUM</span>
						<br>
							<a href="loja_en.php"><img src="images/backtofuckyouup/backtofuckyouup-cover.JPG" class="img-responsive"></a>
						<br>
						<hr>
						<img src="images/noturnall-simbolo.png"><span>FIRST ALBUM</span>
						<br>
							<a href="loja_en.php"><img src="images/capa-cd.jpg" class="img-responsive"></a>
						<br>
						<hr>
							<img src="images/noturnall-simbolo.png"><span>NEW DVD</span>
						<br>
						<a href="loja_en.php"><img src="images/noturnall_dvd_baixa_edt.jpg" class="img-responsive"></a>
						<hr>
						<img src="images/noturnall-simbolo.png"><span>NEW LP</span>
						<br>
						<a href="loja_en.php"><img src="images/noturnall_capa_vinil.JPG" class="img-responsive"></a>
					</div>
					<hr>
					<div id="icons-page">
						<img src="images/noturnall-simbolo.png"><span>NOTURNALL LINKS</span>
						<br>
						<div class="center-block" style="width: 200px;">
							<a href="http://pt-br.facebook.com/noturnall" target="_blank"><img src="images/iconFB.png"></a>
							<a href="http://www.twitter.com/noturnall" target="_blank"><img src="images/iconTW.png"></a>
							<a href="http://www.youtube.com/channel/UC_iaU7yqpRG5QASwN2dM_jA" target="_blank"><img src="images/iconYT.png"></a>
						</div>
					</div>
					<hr>
					<div id="merch-page">
						<img src="images/noturnall-simbolo.png"><span>MERCHANDISE</span>
						<br>
						<a href="loja_en.php"><img src="images/merchan/camiseta_01_dvd_700.jpg" class="img-responsive"></a>
						<br><br>
						<a href="loja_en.php"><img src="images/merchan/canecas_700.jpg" height="545" width="700" class="img-responsive"></a>
						<br><br>
						<a href="loja_en.php"><img src="images/merchan/camiseta_02_fogo_700.jpg" class="img-responsive"></a>
						<br><Br>
						<a href="loja_en.php"><img src="images/merchan/camiseta_03_zumbi_700.jpg" class="img-responsive"></a>
					</div>
				</div>
			</div>
		</div>
		<br>
	<?php include 'includes/_footer.php';?>
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
	</body>
	</html>