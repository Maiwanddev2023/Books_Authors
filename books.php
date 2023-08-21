<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books and Authors</title>
</head>
<body style="background-color: wheat;">
	<h1 style="color: firebrick;">Books and their Authors</h1>
	<hr/>
	<?php 
		$Books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in wonderland", "The cat in the hat");
		$Authors = array("Mark Twain", "George Orwell", "Lewis Carroll", " Dr. Seuss");
		$RealNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");

		for($i = 0; $i < count($Books); ++$i) {
			echo "<p>The real name of $Authors[$i], the author of \"$Books[$i]\", is $RealNames[$i].</p>";
			echo "The title \"$Books[$i]\" contains " , strlen($Books[$i]), " characters and ", str_word_count($Books[$i]), " words.</p>";
		}
	?>
</body>
</html>