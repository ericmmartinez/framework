<!DOCTYPE html>
<html lang="en">
<head>
	<title>Typeography</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700'
			rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic'
			rel='stylesheet' type='text/css'>

	<?php if (file_exists('css/typeset.css')) : ?>
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/typeset.css"/>
	<?php else : ?>
		<link rel="stylesheet/less" type="text/css" href="css/reset.less"/>
		<link rel="stylesheet/less" type="text/css" href="css/typeset.less"/>
		<script type="text/javascript" src="js/less.js"></script>
	<?php endif; ?>
	<style type="text/css"><!--
	.wrapper {
		display:block;
		max-width:960px;
		margin:0 auto;
		border-style:solid;
		border-color:#999;
		border-width:0 1px;
	}
	--></style>
</head>
<body>
<div class="wrapper">

	<h1>H1 Text</h1>
	<h2>H2 Text</h2>
	<h3>H3 Text</h3>
	<h4>H4 Text</h4>
	<h5>H5 Text</h5>
	<h6>H6 Text</h6>

	<br/>
	<hr/>
	<br/>

	<p>
		Paragraph text with some lorem ipsum dolor sit amet, consectetur
		adipiscing elit. Cras pulvinar accumsan aliquet. Praesent gravida
		fringilla bibendum. Fusce volutpat, lacus nec mollis commodo, augue
		augue iaculis mi, sit amet tincidunt ipsum arcu dapibus felis. Cum
		sociis natoque penatibus et magnis dis parturient montes, nascetur
		ridiculus mus. Nulla aliquet elit vel tellus vehicula sit amet faucibus
		lacus elementum. Sed ultrices, tortor ut consequat faucibus, ipsum
		tortor interdum orci, sed adipiscing felis diam eu enim. Pellentesque
		lacus massa, laoreet ultricies mollis sed, sodales quis purus. Phasellus
		quis massa nec justo feugiat dapibus. Morbi et nulla eu diam blandit
		mollis. Cras volutpat ullamcorper nisl, suscipit bibendum nisl commodo
		et.
	</p>

	<br/>
	<hr/>
	<br/>

	<ol>
		<li>Ordered Lists</li>
		<li>Lorem ipsum dolor sit amet&hellip;</li>
		<li>Fusce volutpat, lacus nec mollis commodo&hellip;</li>
	</ol>

	<br/>
	<hr/>
	<br/>

	<ul>
		<li>Un-ordered Lists</li>
		<li>Lorem ipsum dolor sit amet&hellip;</li>
		<li>Fusce volutpat, lacus nec mollis commodo&hellip;</li>
	</ul>

	<br/>
	<hr/>
	<br/>

	<dl>
		<dt>List-Type</dt>
		<dt>Definition List</dt>
		<dt>Lorem ipsum dolor sit amet&hellip;</dt>
		<dt>Fusce volutpat, lacus nec mollis commodo&hellip;</dt>
	</dl>

	<br/>
	<hr/>
	<br/>

	<blockquote>
		Block quote text with some lorem ipsum dolor sit amet, consectetur
		adipiscing elit. Cras pulvinar accumsan aliquet. Praesent gravida
		fringilla bibendum. Fusce volutpat, lacus nec mollis commodo, augue
		augue iaculis mi, sit amet tincidunt ipsum arcu dapibus felis.
	</blockquote>

	<br/>
	<hr/>
	<br/>

	<pre><?php
		print htmlspecialchars(substr(file_get_contents(__FILE__),0,1025));
	?> 
	&hellip;</pre>
</div>	
</body>
</html>
