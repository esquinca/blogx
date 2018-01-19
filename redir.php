<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Demo</title>
    <link rel="shortcut icon" href="img/favicon.ico" />

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="plugin/isMobile-master/isMobile.js"></script>
		<script type="text/javascript">
			function getstoreios(appName, appId) {
				var baseurl = "itms-apps://itunes.apple.com/app/";
				var name = appName;
				var id = appId;
				var ruta = baseurl + name + "/id" + id;
				return ruta;

			}
			function getstoreandroid(appId) {
				var baseurl = "https://play.google.com/store/apps/details?id=";
				var id = appId;
				var ruta = baseurl + id;
				return ruta;
			}

			function cronometro() {
					 var cronometro;
					 var contador_s =0;
					 var contador_m =0;
					 var s = document.getElementById("segundos");
					 var m = document.getElementById("minutos");
					 cronometro = setInterval(
								function(){
										if(contador_s==60)
										{
												contador_s=0;
												contador_m++;
												console.log(contador_m);
												document.getElementById('minutos').innerHTML = contador_m;
											 //  m.innerHTML = contador_m;
												if(contador_m==60)
												{
														contador_m=0;
												}
										}
										document.getElementById('segundos').innerHTML = contador_s;
										console.log(contador_s);
									 //  s.innerHTML = contador_s;
										contador_s++;
								}
								,1000);
			}


			function cronometro_inverso() {
					 var cronometro;
					 var contador_s =5;
					 var redirnormal = "https://www.iberostar.com/en";
					 cronometro = setInterval(
					 function(){
								if(contador_s==0)
								{
									document.getElementById('segundos').innerHTML = 0;
									window.location.replace(redirnormal);
									console.log('detener');
								}
								else {
									document.getElementById('segundos').innerHTML = contador_s;
									console.log(contador_s);
									contador_s--;
								}
					 },1000);
			}

			(function () {
				var MOBILE_SITE = '/mobile/index.html', // site to redirect to
				NO_REDIRECT = 'noredirect'; // cookie to prevent redirect
				// I only want to redirect iPhones, Android phones and a handful of 7" devices
				// Mover a página de redirección.
				cronometro_inverso();
				if (isMobile.apple.device || isMobile.android.phone || isMobile.seven_inch) {

					if (isMobile.apple.device){
						console.log('hola ios');
						var name_game= "iberostar-hotels-resorts";
						var id_game = "922530529";
						fallbackLink = getstoreios(name_game, id_game);
					}
					if (isMobile.android.phone) {
						console.log('hola android');
						var id_game= 'com.mo2o.iberostar';
						fallbackLink = getstoreandroid(id_game);
					}

					// Only redirect if the user didn't previously choose
					// to explicitly view the full site. This is validated
					// by checking if a "noredirect" cookie exists
					if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
						var win = window.open(fallbackLink, '_blank');
						win.focus();
						//window.open(fallbackLink);
						//document.location = fallbackLink;
						//window.location.replace(fallbackLink);
					}
				}

			})();
		</script>

	</head>


	<body>
	<span style="font-family: Courier; display:none;" id="segundos"></span>
		<div class="site-content">
			<main class="main-content">
				<div class="site-footer">
					<div class="container">
						<img width="200" height="62" src="img/logo.svg">
					</div>
				</div>

				<div class="fullwidth-block baner" data-bg-image="img/T0810COVER3.jpg" style="border-top: 3px solid #3bcdc3;">
					<div class="container">
					</div>
				</div>


				<div class="fullwidth-block  footer-cta">
					<div class="container">
						<h2 class="section-title">Ya cuentas con acceso a internet!</h2>
						<small class="section-subtitle">DESCARGA NUESTRA APP!</small>


						<div class="row" style="text-align: center !important;">
							<div class="col-md-12">
								<a href="https://play.google.com/store/apps/details?id=com.mo2o.iberostar&hl=en"><img width="150" height="50" src="img/app-android.svg"></a>
								<a href="https://itunes.apple.com/mx/app/iberostar-hotels-resorts/id922530529?l=en&mt=8"><img width="150" height="50" src="img/app-ios.svg"></a>
							</div>
						</div>



					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

			</main> <!-- .main-content -->
		</div>


		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
	</body>

</html>
