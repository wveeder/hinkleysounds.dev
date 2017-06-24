<!doctype html>
<html>
<head>
	<title> Welcome to Hinkleysounds.com - Index </title>
	<link rel = "stylesheet" href="css/hinkley.css" type = "text/css" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-25513925-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<script>
	function detectmob() {

	 var x = document.getElementById("myImg");

	 var img = document.createElement("img");
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){

		x.width = 1000;
		x.height = 1100;
		return true;

		return true;
	  }
	 else {
		x.width = 500
		x.height = 540;
		return true;
	  }
	}
	</script>
</head>

<body>
	<video playsinline autoplay muted loop poster="video/background.png" id="bgvid">
		<source src="video/bkgroud_vid.webm" type="video/webm">
		<source src="video/bkgroud_vid.mp4" type="video/mp4">
	</video>

<!-- Page Content -->
<div class="wrapper">
	<div class="contact">
		<div class="logo_image">
			<a href="index.php" style="text-decoration: none">
			<img src="images/bg_images/hinkley_logo.png" alt=""></a>
		</div>

		<div class="nav_links">
			<ul>
			  <li><nav_links><a href="https://hinkley.bandcamp.com/"><i>S T O R E</i></a></nav_links></li>
			  <li><nav_links><a href="images.php"><i>I M A G E S</i></a></nav_links></li>
			  <li><nav_links><a href="about.php"><i>A B O U T</i></a></nav_links></li>
			  <li><nav_links><a href="contact.php"><i><u>C O N T A C T</u></i></a></nav_links></li>
			</ul>
		</div>
		<div class="contact_wrapper">
			<div class="contact_txt">
				<h3>Contact:</h3>
				<br />
				<h5>
					<script>
						// A wizard to generate this code is at http://www.jottings.com/obfuscator/
						{ coded = "RSmJWhoDLTmiD@0azSW.ELa"
						  key = "fd5teAVEZyklaX3uCxF1q2PBisKhngQUoJWzjIT896pOwMcSDNRm0r7LG4bvYH"
						  shift=coded.length
						  link=""
						  for (i=0; i<coded.length; i++) {
							if (key.indexOf(coded.charAt(i))==-1) {
							  ltr = coded.charAt(i)
							  link += (ltr)
							}
							else {
							  ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
							  link += (key.charAt(ltr))
							}
						  }
						document.write("<a href='mailto:"+link+"'>Email Us</a>")
						}
						//-->
					</script><noscript>Sorry, you need Javascript on to email me.</noscript>
				</h5>
				<h5><a href="http://www.carbonrecords.com/bands/hinkley/" target="_new">Carbon Records Site</a></h5>
				<h5><a href="https://www.facebook.com/hinkleysounds/" target="_new">Facebook</a></h5>
				<h5><a href="https://www.instagram.com/hinkleysounds/" target="_new">Instagram</a></h5>
				<h5><a href="http://twitter.com/#!/Hinkleysounds" target="_new">Twitter</a></h5>
				<h5><a href="https://www.tumblr.com/blog/hinkleysounds" target="_new">Tumblr</a></h5>
				<h5><a href="https://www.youtube.com/channel/UCGf104Tb1iZ1Kj0grkhB5UQ">Youtube</a></h5>
			</div>
		</div>

		<div class="credits">
			<h6>Background image by Mike Turzanski</h6>
		</div>

		<div class="press_wrapper">
			<ul>
				<press_li><nav_links><a target="_blank" title="follow us on twitter" href="https://twitter.com/hinkleysounds"><img alt="follow me on twitter" src="images/social_media/twitter.png" height="52" width="52" border=0></a></nav_links></press_li>
				<press_li><nav_links><a target="_blank" title="find us on Facebook" href="https://www.facebook.com/hinkleysounds/"><img alt="follow me on facebook" src="images/social_media/facebook.png"  height="52" width="52" border=0></a></nav_links></press_li>
				<press_li><nav_links><a target="_blank" title="follow us on instagram" href="https://www.instagram.com/hinkleysounds/"><img alt="follow me on instagram" src="images/social_media/instagram.png"  height="52" width="78"  border=0></a></nav_links></press_li>
				<press_li><nav_links><a target="_blank" title="ollow us on spotify" href="https://open.spotify.com/artist/2LOmWJS1Xet0wBJ08aC800"><img alt="follow us on spotify" src="images/social_media/Spotify.png"  height="50" width="50"  border=0></a></nav_links></press_li>
				<press_li><nav_links><a target="_blank" title="Email us" href="mailto:hinkleysounds@gmail.com"><img alt="email" src="images/social_media/email.png"  height="60" width="60"  border=0></a></nav_links></press_li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
