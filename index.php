<!DOCTYPE HTML>
	
	<head>
		<title>List PHP</title>
	</head>

	<body>
		<?php

			include'user-array.php';


			foreach ($user_array as $theArray) {
				for($i = 0; $i < 4; $i++) {
					if($i == 0){
						echo "$theArray[first_name]"." ";
					}
					else if($i == 1){
						echo "$theArray[last_name]"." ";
					}
					else if($i == 2){
						echo "$theArray[age]"." ";
					}
					else if($i == 3){
						echo "$theArray[occupation]"." ";
					}
				}
			}
			unset($theArray);
			unset($theInfo);
		?>
	</body>

</HTML>