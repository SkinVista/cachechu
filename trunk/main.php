<?php if(!isset($config)): die(); endif; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cachechu Gnutella2 GWebCache</title>
	<style type="text/css">
	body,h1,form{margin:0;padding:0;font-family:Tahoma,Arial,sans-serif;}
	body{background:white;color:#555753;text-align:center;}
	a{color:#3465a4;}
	a:hover{color:#c00;}
	h1{font-size:1.5em;padding:0.75em 0;}
	form{padding-bottom:1em;}
	#footer {background:#2e3436;padding:0.3em 0.5em;margin-top:1em;text-align:center;}
	#footer,#footer a{color: white;}
	</style>
</head>

<body>
	<h1>
		<a href="http://code.google.com/p/cachechu/"
			title="Cachechu Projects Page">Cachechu Gnutella2 GWebCache</a>
	</h1>

	<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<div>
			<input type="hidden" name="net" value="gnutella2">
			<input type="hidden" name="ping" value="1">
			<input type="hidden" name="get" value="1">
			<input type="submit" value="Test Cache">
		</div>
	</form>

	<form method="get" action=".">
		<div>
			<input type="hidden" name="net" value="gnutella2">
			<input type="hidden" name="update" value="1">
			<label for="url">URL</label>
			<input type="text" name="url" id="url" size="50">
			<input type="submit" value="Update">
		</div>
	</form>

	<div id="footer">
		Cachechu <?php echo VERSION; ?> under <a href="http://www.gnu.org/licenses/gpl-3.0.html">GPLv3</a>
	</div>
</body>
</html>