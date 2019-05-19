<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width">
<style>

@media only screen and (min-width: 800px) {
  .mobileicon {
    display: none;
  }
}

/* mobile */
@media (max-width: 800px) {
   .side {
    display: none;
  }
  .mobileicon1 {
    padding: 20px 130px;
  }
  .main {
    font-size: 15px;
    text-align: center;
  }
  .responsive1 {
    width: auto;
  }
  div.gallery1 img  {
    width: 300px;
  }
}

@media (max-width: 482px) {
   .side {
    display: none;
  }
  .mobileicon1 {
    padding: 20px 130px;
  }
  .main {
    font-size: 15px;
    text-align: center;
  }
  .responsive1 {
    width: auto;
  }
  div.gallery1 img  {
    width: 300px;
  }
  div.gallery {
    margin: 5px;
    border: 1px solid black;
    width: 250px;
    transition: 1s ease;
    transition-delay: 1s ease;
  }
}

div.gallery:hover {
  border: 1px solid #777;}

div.gallery img {
  width: 100%;
  height: auto;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 33%;
}

}

@media (max-width: 382px) {
   .side {
    display: none;
  }
  .mobileicon1 {
    padding: 20px 130px;
  }
  .main {
    font-size: 15px;
    text-align: c
    width: auto;
  }
  div.gallery1 img  {
    width: 200px;
  }
}

@media (max-width: 300px) {
   .side {
    display: none;
  }
  .mobileicon1 {
    padding: 20px 130px;
  }
  .main {
    font-size: 15px;
    text-align: center;
  }
  .responsive1 {
    width: auto;
  }
  div.gallery1 img  {
    width: 150px;
  }
}

body {
	background-image: linear-gradient(to right, #FFEFD5, #FFA07A, #D2691E);
	animation-name: preliv;
	animation-duration: 4s;
	font-family: arial;
}

@keyframes preliv {
	0% {background-position: 50%}
	50% {background-position: 0% 100%}
	100% {background-position: 0% 50%}
}

html {
	box-sizing: border-box;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

header:after { 
	content: "";
	display: table;
	clear: both;
}
.row {
	padding: 25px;
}

.levo {
	float: left;
	width: 20%;
	height: 280px;
}

.desno {
	float: left;
	width: 80%;
}

ul {
	float: right;
	margin-top: 40px;
}

ul li {
	display: inline-block;
}

ul li a {
	text-decoration: none;
	padding: 5px 20px;
	color: black;
	border: 1px solid transparent;
	transition: 0.6s ease;
}

ul li a:hover {
	background-color: black;
	color: white;
}

p {
	text-align: justify;
	font-family: 'Acme', sans-serif;
}

.logo {
	float: left;
	width: 300px;
	height: auto;
}

.side {
	float: left;
	padding: 0px 20px;
	width: 22%;

}

.main {
	float: left;
	width: 78%;
}

.desno1 {
	float: right;
	width: 20%;
}

.izdelovalci {
	display: flex;
}

.izdelovalci a {
	color: blue;
	padding: 10px 100px;
	text-decoration: none;
	text-align: center;
	display: block;
	overflow: hidden;
	transition: 1s ease;
	transition-delay: 1s ease;
	border-radius: 15px;
}

.izdelovalci a:hover {
	background-color: #FF4500;
}

.bg-navbar {
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	position: absolute;
	top: 0;
	display: flex;
	justify-content: left;
	align-items: center;
	display: none;
	padding: 20px;
}

.navbar-content {
	width: auto;
	height: auto;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 20px;
	position: relative;
	background-color: #90EE90;
}

.close-navbar {
	position: absolute;
	top: 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}

.linksplet {
	display: flex;
	padding: 0px 170px;
	border-radius: 15px;
}

.linksplet a {
	color: black;
	background-color: yellow;
	padding: 10px 100px;
	text-decoration: none;
	text-align: center;
	display: block;
	overflow: hidden;
	transition: 1s ease;
	transition-delay: 1s ease;
	border-radius: 15px;
}

.linksplet a:hover {
	background-color: #FF4500;
}

div.gallery {
  margin: 5px;
  border: 1px solid black;
  width: 250px;
  transition: 1s ease;
  transition-delay: 1s ease;
}

div.gallery:hover {
  border: 1px solid #777;}

div.gallery img {
  width: 100%;
  height: auto;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 33%;
}

.icons {
	padding: 0px 0px;
	position: fixed;
	top: 30%;
	right: 0%;
	display: flex;
	flex-direction: column;
}

.icons a {
	text-decoration: none;
	text-transform: uppercase;
	padding: 10px;
	font-size: 22px;
	font-family: 'Oswald', sans-serif;
	margin: 2px;
	text-align: left;
	border-radius: 50px 0px 0px 50px;
	transform: translate(215px, 0px);
	transition: all 0.5s;
}

.icons a:hover {
	transform: translate(0px, 0px);
}

.icons a i {
	margin-right: 25px;
	background-color: white;
	height: 40px;
	width: 40px;
	color: black;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	transition: all 0.5s;
}

.icons a:hover i {
	transform: rotate(360deg);
}

.icons a i.fa-facebook-f {
	color: #2c80d3;
}

.facebook {
	background-color: #2c80d3;
	color: white;
}

</style>
</head>
<body>

<header>
	<div class="levo">
		<img class="logo" href="index.php" src="harmonike.info-logo.png">
		
</header>

<div class="icons">
	<a href="https://www.facebook.com/Harmonike.info/" class="facebook"><i class="fab fa-facebook-f"></i>HARMONIKE.INFO</a>
</div>

<div class="mobileicon">
	<div class="izdelovalci">
				<a href="harmonike1.html"><i class="fas fa-arrow-left"></i> NAZAJ</a>
			</div>
	<a class="mobileicon1" href="#" id="nav"><i class="fas fa-align-justify"></i></a><br><br>
	<div class="bg-navbar">
			<div class="navbar-content">

				<div class="close-navbar">+</div>
				<h3 style="text-align: center;">Na harmoniko Zupan igrajo:</h3><br>
		<hr>
		<div class="izdelovalci">
			<a href="#">Miha Debevec</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Toni Iskra</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Jodel Expres</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Laurent Africano</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Kathy Hlad</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Lenti Lenko</a>
		</div>
		<hr>
			</div>
		</div>
		<script>
		document.getElementById('nav').addEventListener("click", function() {
			document.querySelector('.bg-navbar').style.display = "flex";
		});

		document.querySelector('.close-navbar').addEventListener("click", function() {
			document.querySelector('.bg-navbar').style.display = "none";
		});
		</script>
	</div>

<div class="row">
	<div class="side">
		<div class="izdelovalci">
			<a href="harmonike1.html"><i class="fas fa-arrow-left"></i> NAZAJ</a>
		</div>

		<br>
		<h3 style="text-align: center;">Na harmoniko Zupan igrajo:</h3><br>
		<hr>
		<div class="izdelovalci">
			<a href="#">Miha Debevec</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Toni Iskra</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Jodel Expres</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Laurent Africano</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Kathy Hlad</a>
		</div>
		<hr>
		<div class="izdelovalci">
			<a href="#">Lenti Lenko</a>
		</div>
		<hr>
	</div>

	<div class="main">
		
		<div class="responsive1" align="center">
			<div class="gallery1">
			  <a target="_blank" href="">
			    <img src="zupan-logo-1.png" alt="Cinque Terre" width="600" height="400">
				</a>
			</div>
		</div>

		<h2 style="text-align: center; font-size: 30px; font-family: 'Macondo Swash Caps', cursive;">HIŠA HARMONIKE ZUPAN</h2><br><br>
		<h3 style="text-align:center; font-family: 'Macondo Swash Caps', cursive;">IME S TRADICIJO ZNANJA, <br>KVALITETE IN ZANESLJIVOSTI</h3><br><br><br>
		
		<div class="responsive1" align="center">
			<div class="gallery1">
			  <a target="_blank" href="zupan-zacetna.jpg">
			    <img src="zupan-zacetna.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
			<p style="text-align: center; font-family: 'Macondo Swash Caps', cursive;">VERJETNOST V LASTNO ZMAGO JE VELIKA,<br> ČE VERJAMETE V LASTNE SANJE !</p>
		</div><br><br>

			<div class="medalje1" align="center" style="">
				<div class="gallery2">
				  <a target="_blank" href="zupan-medalje-1.jpg">
				    <img src="zupan-medalje-1.jpg" alt="Cinque Terre" width="600" height="400">
				  </a>
				</div>
			</div>
			
			<div class="medalje1" align="center" style="">
				<div class="gallery2">
				  <a target="_blank" href="zupan-medalje-2.jpg">
				    <img src="zupan-medalje-2.jpg" alt="Cinque Terre" width="600" height="400">
				  </a>
				</div>
			</div>

		<div>
			<h3 style="text-align: center; color: green; font-family: 'Yeon Sung', cursive;">ZAKAJ HARMONIKA ZUPAN?</h3><br>
			<p style="font-family: 'Yeon Sung', cursive;">Mnogo vas je, ki se zanimate po telefonu, emailih ali preko FB zasebnih sporočil za diatonične in klavirske harmonike ZUPAN, ter skoraj vedno postavljate tudi vprašanja, v čem je harmonika ZUPAN boljša ali drugačna od drugih znamk.<br><br>
			<b>Dragi naši bodoči kupci.</b><br>
			Vljudno vas usmerjamo na povezavo <a href="https://harmonikazupan.com/who-we-are/nagrade-patenti/">(klikni tukaj)</a>, kjer lahko dobite vse informacije o naših dosežkih v razvoju.<br>
			Predlagamo pa vam, da lahko povprašate pri drugih proizvajalcih koliko in katere nagrade ter priznanja za razvoj in inovativnost so pridobili ter na ta način primerjate kakovost in zaupanje v blagovno znamko.<br>
			Mi vam lahko in bomo z veseljem svetovali in povedali vse o harmonikah ZUPAN, saj le te poznamo od samega začetka.<br><br>
			Vljudno vabljeni v našo hišo tradicije - hišo harmonike ZUPAN !</p>
		</div>

		<br><br><br>

		<h3 style="color: green; text-align: center; font-size: 22px; font-family: 'Yeon Sung', cursive;">HARMONIKE ZUPAN</h3><br><br>
		<p style="font-family: 'Yeon Sung', cursive;">Hiša harmonike ZUPAN vključuje razvoj, proizvodnjo, prodajo in servis harmonik, glasbeno galerijo s 350 ročno izdelanimi lesenimi intarzijami, pojočimi stopnicami in slikami z glasbenimi motivi, muzej starih harmonik in arhiv dokumentov o najstarejših harmonikah na Slovenskem.</p><br>

		<h3 style="color: green; text-align: center; font-family: 'Yeon Sung', cursive;">VALENTIN ZUPAN</h3><br>
		<p style="font-family: 'Yeon Sung', cursive;">Po poklicu izdelovalec lesenih glasbenih instrumentov. Svojo kariero neslutenih razsežnosti je začel leta 1951 kot učenec v tovarni glasbil Mengeš. Prvo harmoniko je za šolsko razstavo izdelal pri rosnih 16.letih. Po 29. Letih dela v tovarni se je odločil, da se bo popolnoma posvetil razvoju, izboljševanju in izdelovanju povsem lastnih modelov glasbil.<br>Zaradi nenaklonjenosti takratnih političnih oblasti, je leta 1980 lastno obrt preselil v sosednjo Italijo, kjer je lahko 18. let nemoteno nadaljeval svoje poslanstvo. Valentin Zupan je eden redkih proizvajalcev harmonik, ki po svojih zamislih sam nariše načrte, naredi maketo in se potem loti izdelave vzorca. Vse, kar je v svojem življenju ustvaril, je plod njegovih zamisli in rok. V osmih desetletjih svojega življenja njegovo delo še vedno dosega vrhunce. Harmonike razvija in izdeluje v domačem Mengšu. Zupanove harmonike so si zaradi svoje kakovosti in izvirnosti pridobile velik ugled in dobro ime tako doma kot po celem svetu.</p><br><br>

		<h3 align="center">ZUPANOVA HIMNA</h3>

		<div class="responsive" align="center" style="width: 100%;">
			<div class="gallery" style="width: 300px;">
			  <a target="_blank" href="zupan-himna.png">
			    <img src="zupan-himna.png" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<p><b>Dragi naši!</b><br><br>Kot veste ali pa tudi še ne, da ima harmonika ZUPAN svojo skladbo, ki jo imamo v naši družini za "himno" katere avtor je Valentin Zupan.<br>Naslov skladbe posvečene harmoniki ZUPAN je – ZUPAN HARMONIKA HIMNA.<br><br> Objavljamo povezavo na katero lahko kliknete ter z nadaljnjimi koraki pridete do možnosti, da se lahko skladbo naučite v celoti samostojno.<br>Želimo vam veliko zabave ob učenju in spoznavanju online " učitelja " Vharmonika - virtualni učitelj igranja na harmoniko na povezavi: <br><br>* <a href="http://www.vharmonika.com/index.php…">3-vrstne harmonike</a><br>
		* <a href="http://www.vharmonika.com/index.php…">4-reihige</a><br>
		* <a href="http://www.vharmonika.com/index.php…">Klavirska harmonika</a></p>


		<br><br><br>
		<div class="linksplet">
			<a href="https://harmonikazupan.com">URADNA SPLETNA STRAN HIŠE HARMONIKE ZUPAN</a>
		</div>
		<br><br><br>

		<h3>Galerija</h3><br>

		<h5 style="font-size: 15px; font-family: 'Yeon Sung', cursive;">IZ ZAKLADNICE HIŠE HARMONIKE ZUPAN – SLAK ZUPAN</h5><br>
		<p style="font-family: 'Yeon Sung', cursive;">Unikat, ki nima para ! Izdelek, ki izžareva ponos !<br><br>TA EDINSTVENA HARMONIKA JE DRAGOCENOST, KI SI JO LAHKO IZBERETE ZASE !<br>Je harmonika, ob kateri boste zasijali tudi sami, z vsem sijajem!<br>Ona je izdelek, ob katerem smo tudi sami hvaležni za nam lastno znanje!<br>Po 47. letih se je v hišo vrnila harmonika SLAK ZUPAN.<br>Neizmerna veselje in sreča nas prevevata ob tem, da smo jo znova lahko prijeli v roke.</p><br>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-zaklad.jpg">
			    <img src="zupan-zaklad.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* VINTAGE - ko nase, kaj daš !</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-vintage.jpg">
			    <img src="zupan-vintage.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan17.jpg">
			    <img src="zupan17.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* VANESSA - HARMONIKA NOVE GENERACIJE - zvok, ki očara !</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan25.jpg">
			    <img src="zupan25.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan26.jpg">
			    <img src="zupan26.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* Legenda med legendami, po celem svetu.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan3.jpg">
			    <img src="zupan3.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan4.jpg">
			    <img src="zupan4.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* Bolj ženstvena od moškega ega.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan2.jpg">
			    <img src="zupan2.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan16.jpg">
			    <img src="zupan16.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan8.jpg">
			    <img src="zupan8.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>

		<p>* Lepoto duše lahko merite z lepoto svoje harmonike in njenimi zvoki !</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan11.jpg">
			    <img src="zupan11.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* PRIVOŠČI SI - lahko imaš črno na sebi.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan13.jpg">
			    <img src="zupan13.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>

		<h5 style="font-size: 15px; font-family: 'Yeon Sung', cursive;">HIŠA HARMONIKE ZUPAN - A TI ENO ZAIGRAM ?</h5>

		<p style="font-family: 'Yeon Sung', cursive;">DRAGI STARŠI - IZBIRA JE VAŠA !<br><br>V naši ponudbi imamo na voljo modele harmonik s katerimi bodo vaši otroci zadovoljni, Vi pa boste lahko uživali v njihovem igranju - igranju z zadovoljstvom !<br><br>Vabi vas HIŠA HARMONIKE ZUPAN</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-otroske.jpg">
			    <img src="zupan-otroske.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<p style="font-family: 'Yeon Sung', cursive;">* ELEGANCA, PERFEKCIONIZEM, STVARJENJE MISLI, IDEJA, KONCEPT ... vse to in še več je združeno v instrument s katerim lahko harmonikar doseže odlično nadgradnjo lastnega muziciranja in glasbenega ustvarjanja in užitkov.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-vintage-1.jpg">
			    <img src="zupan-vintage-1.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<h4>CENTER RABLJENIH HARMONIK</h4>
		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-rabljene-harmonike.jpg">
			    <img src="zupan-rabljene-harmonike.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<h5 style="font-size: 15px; font-family: 'Yeon Sung', cursive;">HIŠA HARMONIKE ZUPAN - IMATE JO DOMA - PLAČUJETE PA PO OBROKIH</h5><br>
		<p style="font-family: 'Yeon Sung', cursive;">HITRI KREDIT v 1 uri za RABLJENE HARMONIKE</p><br>
		<p style="font-family: 'Yeon Sung', cursive;">Še vedno velja, da lahko tudi rabljene harmonike kupite na obroke. <br>Pri nas uredite vse potrebno za odobritev hitrega kredita pri naši partnerski banki.
		Kako to izvesti?<br>Preprosto, pokličite nas oz.nas kontaktirajte in bomo skupaj poiskali najbolj ugodno ponudbo za vaš nakup.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-kredit.jpg">
			    <img src="zupan-kredit.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>

		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<h4 style="font-family: 'Yeon Sung', cursive;">DIAGNOSTIKA HARMONIK</h4>
		<h5 style="font-family: 'Yeon Sung', cursive;">HIŠA HARMONIKE ZUPAN - DIAGNOSTIKA HARMONIK<br>
		DIAGNOSTICIRAMO vse znamke harmonik !</h5><br>

		<p style="font-family: 'Yeon Sung', cursive;">GENERALNI PREVENTIVNI PREGLED vaše harmonike, tako boste natančno izvedeli v kakšnem stanju je vaša harmonika.<br>Preglede izvaja sam mojster VALENTIN ZUPAN s sodelavci.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-diagnostika.jpg">
			    <img src="zupan-diagnostika.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>

		<h4 style="font-family: 'Yeon Sung', cursive;">SERVIS HARMONIK</h4>
		<p>Obveščamo vse lastnike diatoničnih harmonik ZUPAN- modelov JUBILEUM, VANESSA, RESONA12, JUBILEUM M/65,da imamo v našem servisu ZUPAN za omenjene modele zagotovljene originalne nadomestne dele.<br>Vabimo Vas, da se v primeru servisa prej omenjenih modelov harmonik oglasite in si zagotovite kvaliteten ter strokovni pregled in posledično menjavo originalnih delov.<br>Vabljeni v hišo harmonike ZUPAN kjer DIAGNOSTICIRAMO vse znamke diatoničnih, klavirskih in kromatičnih harmonik.</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-servis.jpg">
			    <img src="zupan-servis.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>
		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-servis-1.jpg">
			    <img src="zupan-servis-1.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>
		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-servis-2.jpg">
			    <img src="zupan-servis-2.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>
		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan-servis-3.jpg">
			    <img src="zupan-servis-3.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<h4 style="font-family: 'Yeon Sung', cursive;">ERGOLINE JERMENA</h4><br>
		<h5 style="font-size: 15px; font-family: 'Yeon Sung', cursive;">ZAVEDANJE JE POL ZDRAVJA- JERMENA" ERGOLINE " !</h5>

		<p style="font-family: 'Yeon Sung', cursive;">Preverjeno in potrjeno je, da harmonika pušča harmonikarju trajne zdravstvene težave!<br>JERMENA » ERGOLINE« pa razbremenijo hrbtenico, harmonika postane veliko lažja, ne leze z ramen, ,na telesu je stabilna in se vam med igranjem ne premika v levo in desno, kot se vam to sicer redno dogaja.<br>Za vse vrste in vse blagovne znamke harmonik, vam ponuja Hiša harmonike Zupan JERMENA » ERGOLINE«.<br>Preventivno in zato, ker se imate radi, si privoščite jermena ERGOLINE!<br>Pridite v Hišo harmonike Zupan in skupaj bomo izbrali prava ERGOLINE jermena za vas!</p><br>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan20.jpg">
			    <img src="zupan20.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<h5 style="font-size: 15px; font-family: 'Yeon Sung', cursive;">* ZUPAN FIX PATENT - SAMO V HIŠI HARMONIKE ZUPAN !</h5>

		<p style="font-family: 'Yeon Sung', cursive;">Rešitev, ki je na dlani - ZUPAN FIX za vsako težjo harmoniko ali za vsakega, ki si želi olajšati breme svoje hrbtenice.<br>ZUPAN-FIX je odlična podpora za razbremenitev ramenskega dela, ter zgornjega dela hrbtenice.<br>S pomočjo ZUPAN - FIX patenta postane harmonika veliko veliko lažje "breme" za vašo hrbtenico.<br>Patent FIX se lahko montira ter prilagodi na katero koli harmoniko, naj bo klavirska ali kromatična ali diatonična ter katerekoli znamke.<br><br>ZUPAN- FIX je cenejši od kurative hrbtenice .</p>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan24.jpg">
			    <img src="zupan24.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>
		<h4 style="font-family: 'Yeon Sung', cursive;">KOVČKI ZA HARMONIKE</h4><br>
		<p style="font-family: 'Yeon Sung', cursive;">V naši pestri ponudbi že vrsto let dodajamo naše lastne proizvode predvsem v smeri kako olajšati bremena harmonikarjev.<br>Zupan kovčki so primer našega dolgoletnega razvoja in vizije. Kovčki imajo vse kar harmonikar potrebuje, da primerno zavaruje harmoniko pred zunanjimi vremenskimi vplivi kot tudi pred morebitnimi udarci oz.poškodbami.<br>Harmonikar si harmoniko lahko "pripelje" celo na kolesckih, ki so vgrajeni v kovcke.</p><br>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan22.jpg">
			    <img src="zupan22.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br>

		<h4 style="font-family: 'Yeon Sung', cursive;">NAHRBTNIKI</h4>

		<div class="responsive">
			<div class="gallery">
			  <a target="_blank" href="zupan27.jpg">
			    <img src="zupan27.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			</div>
		</div><br><br><br><br><br><br><br><br><br><br><br><br>
		<p style="text-align: center;">Created by <a href="http://www.gregordrac.com">GREGOR DRAČ</a></p><br><br><br><br>
	</div>
	</div>	
</div>

</body>
</html>