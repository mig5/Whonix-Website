<?php
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
  $protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ? 'https://' : 'http://';
} else {
  $protocol = 'http://';
}
$host = str_replace('www.', '', $_SERVER['HTTP_HOST']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Whonix</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>We need your help!</strong> Whonix requires payments to stay alive. <a href="/wiki/Payments">Do your part!</a>
</div>

<section class="hero">
	<header>
  <div class="clearfix">
    <h1><a href="/" class="cc-active"><img width="160" src="/img/Whonix_Logo.png" alt="Whonix"></a></h1>

    <nav>
      <ul>
        <li><a href="/" class="cc-active">Home</a></li>
        <li><a href="/download">Download</a></li>
        <li><a href="/wiki/Documentation">Wiki</a></li>
        <li><a href="<?php print $protocol; ?>forums.<?php print $host; ?>/">Forum</a></li>
        <li><a href="<?php print $protocol; ?>forums.<?php print $host; ?>/c/news">News</a></li>
      </ul>
    </nav>
  </div>
</header>

	<div class="container">
		<h1 class="editable">Stay Anonymous</h1>
		<h2 class="editable">with Whonix<p><a href="/download" class="button">Download Now</a></p></h2>
	</div>
</section>

<section>
	<div class="container subheader">
		<h2 class="editable">Whonix: A High Security Method of Surfing the Internet</h2>
		<p style="color: #000000;" class="editable">Whonix is a desktop operating system designed for advanced security and privacy. Whonix mitigates the threat of common attack vectors while maintaining usability. Online anonymity is realized via fail-safe, automatic, and desktop-wide use of the Tor network. A heavily reconfigured Debian base is run inside multiple virtual machines, providing a substantial layer of protection from malware and IP address leaks. Commonly used applications are pre-installed and safely pre-configured for immediate use. The user is not jeopardized by installing additional applications or personalizing the desktop. Whonix is under active development and is the only operating system designed to be run inside a VM and paired with Tor.</p>
			<hr>
		<p style="color: #000000;" class="editable">The official sponsor of Whonix is <a href="https://www.eyeonpass.com">EyeOnPASS.com</a> - an API solution for websites and applications that prevents credential stuffing attacks on their users’ accounts.</p>
	</div>
</section>

<section class="alternate-section">
	<div class="container thirds">
		<div>
			<h3 class="editable">Based on Tor</h3>
			<img width="120" height="200" src="/img/Whonix_Tor.png" class="editable with-transparency" alt="Based on Tor">
			<p style="color: #000000;">Whonix utilizes Tor's free software, which provides an open and distributed relay network to defend against network surveillance.</p>
		</div>
		<div>
			<h3 class="editable">Isolation</h3>
			<img width="120" height="200" src="/img/Whonix_Isolation.png" class="editable with-transparency" alt="Leak impossibility">
			<p style="color: #000000;">Connections through Tor are enforced. DNS leaks are impossible, and even malware with root privileges cannot discover the user's real IP address.</p>
		</div>
		<div>
			<h3 class="editable">Compatibility</h3>
			<img width="120" height="200" src="/img/Whonix_Combatibility.png" class="editable with-transparency" alt="Live website in no time at all">
			<p style="color: #000000;">Whonix is available for all major operating systems. Most commonly used applications are compatible with the Whonix design.</p>
		</div>
	</div>
</section>

<section class="bright-section">
	<div class="container">
		<h2 class="editable">Get Whonix Now</h2>

		<div class="quad clearfix">
			<div>
				<div class="portfolio-block">
					<a href="/wiki/Windows"><img width="350" height="200" src="/img/win10.png" alt="Windows" class="editable"></a>
					<h4 class="editable">Windows</h4>
				</div>
			</div>

			<div>
				<div class="portfolio-block">
					<a href="/wiki/VirtualBox"><img width="350" height="150" src="/img/Whonix_Linux.png" alt="Linux" class="editable"></a>
					<h4 class="editable">Linux</h4>
				</div>
			</div>

			<div>
				<div class="portfolio-block">
					<a href="/wiki/VirtualBox"><img width="350" height="150" src="/img/Whonix_OSX.png" alt="osx" class="editable"></a>
					<h4 class="editable">OS X</h4>
				</div>
			</div>

			<div>
				<div class="portfolio-block">
					<a href="https://www.qubes-os.org/doc/whonix/install/"><img width="350" height="200" src="/img/qubes.png" alt="Qubes" class="editable"></a>
					<h4 class="editable">Qubes</h4>
				</div>
			</div>
		</div>
	</div>
</section>


	<section>
		<div class="container subheader">
			<h3>Share Whonix with your Friends:</h3>
			<p><a href="https://twitter.com/intent/tweet?url=https://www.whonix.org&text=&via=Whonix"><img src="/img/twitter.png" class="editable"></a><a> </a><a href="https://facebook.com/sharer.php?u=https://www.whonix.org"><img src="/img/facebook2.png" class="editable"></a><a> </a><a href="https://plus.google.com/share?url=https://www.whonix.org"><img src="/img/google-plus.png" class="editable"></a></p>
		</div>
	</section>

    <footer>
		<div class="container">
			<p><a> </a><a href="/wiki/Payments">Payments</a><a> </a></p>
		</div>
    </footer>
  </body>
</html>

