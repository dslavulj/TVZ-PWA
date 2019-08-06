<!--
$link = 'http://php.net/'
$var= 'PHP Tutorial'
$author= 'Vaše ime i prezime'
Stavite ove varijable za adresu poveznice (href) u HTML dokumentu, tekst poveznice u HTML dokumentu i kao ime autora web stranice u head elementu (<meta>). 
PHP Tutorial //<H3>
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial. 
-->

<!DOCTYPE html>
<?php
	$link = 'http://php.net/';
	$var= 'PHP Tutorial';
	$author= 'Danijel Slavulj';
?>
<html>
	<head>
		<meta name="<?php echo $author?>">
	</head>
	<body>
			<h3>
				<a href="<?php echo $link ?>">PHP</a> Tutorial
			</h3>
			<p>
				PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
			</p>
			<p>
				Go to the <a href="<?php echo $link ?>"><?php echo $var ?> </a>
			</p>
	</body>


</html>