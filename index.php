<!DOCTYPE HTML>
	
	<head>
		<ink type="text/css" rel="user-array" href="user-array.php"/>
		<title>List PHP</title>
	</head>

	<body>
		<?php
			echo "hi";
			foreach ($user_array as $theArray) {
				echo "how is it going";
				foreach ($theArray as $theInfo) {
					echo "$theInfo";
				}
			}
		?>
	</body>

</HTML>