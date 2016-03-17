<!DOCTYPE HTML>
<?php
	require("assets/php/phplib.php");
	$query_thumbnails = "SELECT * FROM thumbnails";
	$thumbnails = $conn->query($query_thumbnails);
?>
<html>
	<head>
		<title>Ramble Shot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Gatto Francesco">
		<meta name="description" content="A pictures web repository where I upload my shots">
		<meta name="keywords" content="Gatto, Francesco, Photo, Instagram, Shape, Bootstrap, CV, curriculum, HTML, CSS, JavaScript, Ramble, Shot">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">
		<!-- Main -->
			<div id="main">
				<!-- Header -->
					<header id="header">
						<!-- What is this? -->
						<h1>Ramble Shot</h1>
						<p>Just a simply photobook app where i upload my works</p>
						<!-- SnapWidget -->
						<center>
							<!-- Facebook button to like the page -->
							<div id="fb_btn" class="fb-like" layout="button_count" data-share="true" data-width="450"></div>
							<br /><br />
							<!-- Icons to other apps -->
							<ul class="icons">
								<li><a href="https://www.facebook.com/francesco.gatto.792" class="icon fa-facebook" alt="Facebook" title="Facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/fracat90/" class="icon fa-instagram" alt="Instagram" title="Instagram"><span class="label">Instagram</span></a></li>
								<li><a href="mailto:info@rambleshot.gattofrancesco.com" class="icon fa-envelope-o" alt="Email" title="Email"><span class="label">Email</span></a></li>
							</ul>
						</center>
					</header>
					<!-- Thumbnail -->
					<!-- Loads all images from db -->
					<section id="thumbnails">
					<?php
						while($res = $thumbnails->fetch_assoc()){
							echo $res['id'] < 11 ? "<article>" : "<article class='hide'>";
								echo "<a class='thumbnail' href='images/fulls/mini/".$res['id']."_mini.jpg'>";
									echo "<img src='images/thumbs/mini/".$res['id']."_mini.jpg' alt='' />";
								echo "</a>";
								echo "<h2>".$res['title']."</h2>";
								echo "<p>".$res['description']."</p><span id='".$res['photo_id']."'></span>";
							echo "</article>";
						}
					?>
					</section>
					<br />
					<!-- Btn to show more photo -->
					<center>
						<input type="button" value="Show more" alt="show more" onclick="showMorePhotos()" />
					</center>
					<br />
					<!-- Embedding instagram + link to my insta page -->
					<center>
						<a href="https://www.instagram.com/fracat90/" alt="instagram" target="_blank"><img src="images/insta_logo.png" alt="instagram" title="Go to Instagram!" /></a>
					</center>
					<center>						
						<iframe src="http://snapwidget.com/in/?u=ZnJhY2F0OTB8aW58MTI1fDN8M3x8bm98NXxub25lfG9uU3RhcnR8eWVzfG5v&ve=110216" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" id="prova"></iframe>
					</center>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>