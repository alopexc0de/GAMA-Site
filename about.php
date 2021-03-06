<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="About page for UnProfessional Standards" />
<meta name="keywords" content="GAMA,UnPS,upstandards,unps-gama,gama-unps,unps,gama,davitech,davitodd,about" />
<meta name="author" content="David Todd" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24492597-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<title>UnProfessional Standards GAMATechnologies - About Us</title>

<link rel="stylesheet" href="site.css" />

</head>
<body>
<div id="container">
	<div id="header">
		<a href="http://unps-gama.tk">
			<img src="http://unps-gama.tk/upload/Pictures/header.png" alt="UnPS-GAMA Header logo" />
		</a>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="http://unps-gama.tk">Home</a></li>
			<li><a href="http://unps-gama.tk/about.php">About</a></li>
			<li><a href="http://unps-gama.tk/img/">IMGShare</a></li>
			<li><a href="http://unps-gama.tk/fp/flatpress/">Personal Blog</a></li>
			<li><a href="http://unps-gama.tk/upload/index.php">Uploads</a></li>
			<li><a href="http://unps-gama.tk/pox/">Proxy</a></li>
			<li><a href="https://github.com/alopexc0de/GAMA-Site">GitHub</a></li>
			<li><a href="placeholder.html">Contact us</a></li>
		</ul>
	</div>
	<div id="content-container1">
		<div id="content-container2">
			<div id="section-navigation">
				<ul>
					<li><h4>Offered Services:</h4></li>
					<li><a href="http://en.wikipedia.org/wiki/IRC">IRC</a> - unps-gama.tk:6667</li>
					<li><a href="http://teamspeak.com">TeamSpeak</a> - unps-gama.tk:9987</li>
					<li><a href="http://unps-gama.tk/img">Image Host</a></li>
					<li><a href="http://en.wikipedia.org/wiki/Secure_Shell">SSH Access</a> - email <a href="mailto:c0de@unps-gama.tk">c0de</a> for info</li>
					<li><a href="http://en.wikipedia.org/wiki/Email">EMail</a> (through SSH)</li>
					<li><a href="http://en.wikipedia.org/wiki/Ftp">FTP</a> (through <a href="http://en.wikipedia.org/wiki/SSH_File_Transfer_Protocol">SFTP</a>)</li>
					<li><a href="upload.html">File Storage</a> (up to 20MB)</li>
					<li><a href="http://en.wikipedia.org/wiki/Proxy_server">Proxy</a> at <a href="http://unps-gama.tk/pox/">Pox</a></li>
				</ul>
			</div>
			<div id="content">
				<h2>
					UnProfessional Standards - GAMATechnologies | About Us
				</h2><hr />
				<h1>This page has been outdated.</h1><h1>Please go <a href="index.php">Home</a> and click "About"</h1>
				<p>
					The way this works is fairly simple, what I do is I host web services. If you want to use me for anything, then feel free to contact me at <a href="mailto:c0de@unps-gama.tk">c0de</a>. Most of what I offer is free for anyone, and I can terminate service for anybody, including to the point of not being able to access anything on the GAMA network. If I decide to terminate service however, I will compress any of your files and give you a link. The link is only good for ~48 hours before it will be deleted automatically. Services that I offer by default are listed to the left, these are free for anyone who wants to use them. Depending on your request I might be able to host other things though, just ask.
				</p>
			</div>
			<div id="aside">
				<script type="text/javascript"><!--
					google_ad_client = "ca-pub-6762927271223365";
					/* Side ad unps1 */
					google_ad_slot = "3534639421";
					google_ad_width = 160;
					google_ad_height = 90;
					//-->
				</script>
				<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script><br />
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<input type="hidden" name="hosted_button_id" value="JWBVWZ8XGM73W" />
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
						<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
					</form>
				<br />
				<h3>
					Upload Files (20MB limit)
				</h3>
				<p>
					Files will automatically sort after 5 minutes. If you can't find your file, check <a href="http://unps-gama.tk/upload/index.php">Uploads</a> for your files.
				</p>
				<form enctype="multipart/form-data" method="post" action="upload.php">
					<label for="file">Filename:</label>
					<input id="file" type="file" name="file" /><br />
					<input value="Upload!" type="submit" name="submit" />
     				</form>
				<br /><h3>Files currently on GAMA (No links): </h3>
      				<?php 
      					include 'preg_find.php';
					$files = preg_find('/./', './upload', PREG_FIND_RECURSIVE);
					foreach($files as $file) printf("<br />%s\n", $file); 
				?>
			</div>
			<div id="footer">
				<p>
					<a href="http://jigsaw.w3.org/css-validator/check/referer">
    						<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
					</a>
					<a href="http://validator.w3.org/check?uri=referer">
						<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
					</a>
				</p>
				<h5>Everything availiable <a href="https://github.com/alopexc0de/GAMA-Site">here</a> on <a href="https://github.com">GitHub</a></h5>
				<h5>Copyright &copy; UnPS-GAMATechnologies, 2012 - CSS Provided by: <a href="http://www.maxdesign.com.au/articles/css-layouts/three-liquid/" target="maxdesign">maxdesign</a></h5>
				<h5>
					<?php 
						$last_modified = filemtime("index.php"); 
						print("Last Modified "); 
						print(date("m/j/y h:i:s a", $last_modified)); 
					?>
					<?php 
						//displays the time / date a page was last accessed 
						echo "Last viewed on: " . date( "m/d/Y h:i:s a"); 
					?> Server time.</h5>
			</div>
		</div>
	</div>
</div>
</body>
</html>
