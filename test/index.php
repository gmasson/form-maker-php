<?php
include '../frmk.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Maker PHP</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		body {
			background-color: #f4f4f4;
		}
		div {
			padding: 1em 0;
		}
	</style>
</head>
<body>
	<div class="container">

		<h1>Test - Form Maker PHP</h1>

		<!--
			frmk( 'type', 'name', 'placeholder', 'value', 'add', 'id', 'class' );
		-->

		<div>
			<h4>Input</h4>
			<?php frmk( 'text', 'nameinput', 'Texto input' ); ?>
		</div>

		<div>
			<h4>Textarea</h4>
			<?php frmk( 'textarea', 'nametextarea', 'Texto textarea', null, 'rows="4"' ); ?>
		</div>

		<div>
			<h4>Select</h4>
			<?php frmk( 'select', 'nameselect', null, array('1', '2', '3') ); ?>
		</div>

		<div>
			<h4>File</h4>
			<?php frmk( 'file', 'namefile' ); ?>
		</div>

		<div>
			<h4>Radio</h4>
			<?php frmk( 'radio', 'nameradio', 'Texto Radio 1', null, '1', 'idopt1' ); ?>
			<?php frmk( 'radio', 'nameradio', 'Texto Radio 2', null, '2', 'idopt2' ); ?>
		</div>

		<div>
			<h4>Checkbox</h4>
			<?php frmk( 'checkbox', 'namecheckbox', 'Texto Checkbox 1', null, '1', 'idck1' ); ?>
			<?php frmk( 'checkbox', 'namecheckbox', 'Texto Checkbox 2', null, '2', 'idck2' ); ?>
		</div>

	</div>

</body>
</html>