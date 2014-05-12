<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Autocomplete - Multiple values</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/jquery-ui-1.10.4.css">
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.4.js"></script>
	<script type="text/javascript">
		var groups = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
	</script>
	<script type="text/javascript" src="../js/groups-auto-complete.js"></script>
</head>
<body>
	<div class="ui-widget">
		<label for="tags">Tag programming languages: </label>
		<input id="tags" size="50">
	</div>
</body>
</html>
