<!DOCTYPE HTML>
	
	<head>
		<title>List PHP</title>
	</head>

	<body>
		<?php

			$user_array = include("user-array.php");

			echo "hi";

			foreach ($user_array as $theArray) {
				echo "how is it going";
				foreach ($theArray as $theInfo) {
					echo "$theInfo";
				}
			}
			unset($theArray);
			unset($theInfo);
		?>
	</body>

</HTML>