<!DOCTYPE html>
<html lang="en">
<head>
	<title>Grid Demo</title>
	<?php if (file_exists('css/grid.css')) : ?>
		<!-- Production Link (try "make clean" to use development) -->
		<link rel="stylesheet" type="text/css" href="css/grid.css"/>
	<?php else :?>
		<!-- Development Link (try "make" to use production)-->
		<link rel="stylesheet/less" type="text/css" href="css/grid.less"/>
		<script type="text/javascript" src="js/less.js"></script>
	<?php endif; ?>

	<style type="text/css"><!--
		/* Page-Specific Styles. For demo purposes only. */
		* {
			font-family:Arial;
			font-size:12px;line-height:1.5em;
			margin:0;padding:0;
		}
		body{padding-top:24px;}
		h1, h2, h3, h4 {font-weight:bold;}
		h1 {font-size:24px;margin:12px 0;}
		h2 {font-size:20px;margin:8px 0}
		h3 {font-size:16px;margin:4px 0}
		h4 {font-size:12px;margin:0;}
		p {margin:6px 0;}
		header {
			position:fixed;top:0;left:0;right:0;
			background:rgba(255,255,255,0.85);
			border-bottom:1px solid #999;
			padding:0 6px; margin:0;
		}
		header #toggle {margin:6px;float:right;}
		.grid-cell {
			font-style:italic;
			margin:6px 0;
			padding:6px 0;
			text-indent:6px;
			background:rgba(0, 0, 0, 0.25);
		}
		.row p { margin:6px 0; }
	--></style>
</head>
<body>
	<?php
		$splits = array('split-3-1', 'split-2-1', 'split-1-1', 'split-1-2',
				'split-1-3');
	?>
	<header>
		<a href="javascript:void(null);" onclick="toggle_fixed();" id="toggle"
				>Toggle Fixed/Fluid</a>
	</header>
	<div class="grid-wrapper">
		<h1>Grid Layout Demo</h1>
		<p>
			This grid supports IE9+ and other modern browsers. This grid is
			designed around having two-columns at each level and then
			sub-dividing below that for more discrete column layouts. For
			example, a four column grid is achieved by nesting two two-column
			grids inside a parent two-column grid. Etc&hellip;
		</p>
		<p>
			In this demo, you will see several grid cells with some textual
			information inside. The parenthetical number indicates the source
			order of the element. Next, each class is listed, space-separated.
		</p>

		<h2>Normal Source Order</h2>
		<?php foreach ($splits as $split) : ?>
			<div class="grid-row <?php print $split; ?>">
				<div class="grid-cell">(1) .grid-cell</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
		<?php endforeach; ?>

		<h2>Reversing Source Order</h2>
		<?php foreach ($splits as $split) : ?>
			<div class="grid-row <?php print $split; ?>">
				<div class="grid-cell trivial">(1) .grid-cell .trivial</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
		<?php endforeach; ?>

		<h2>Nesting</h2>
		<div class="grid-row split-1-1">
			<div class="grid-cell grid-row split-2-1">
				<div class="grid-cell">(1) .grid-cell</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
			<div class="grid-cell grid-row split-2-1">
				<div class="grid-cell">(1) .grid-cell</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
		</div>

		<div class="grid-row split-1-1">
			<div class="trivial grid-cell grid-row split-2-1">
				<div class="trivial grid-cell">(1) .grid-cell .trivial</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
			<div class="grid-cell grid-row split-2-1">
				<div class="trivial grid-cell">(1) .grid-cell .trivial</div>
				<div class="grid-cell">(2) .grid-cell</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">/*<![CDATA[*/
	var body = document.getElementsByTagName('body');
	body = body[0];

	var toggle_fixed = function () {
		var className = body.className;
		if (className === '') {
			body.className = 'fixed';
		} else {
			body.className = '';
		}
	}
	// Auto-update less css if available
	if (typeof less !== 'undefined' && less && less.watch) {less.watch();}
	/*]]>*/</script>
</body>
</html>
