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
						if($theArray[first_name] != null){
							echo "--First Name: "."$theArray[first_name]"." ";
						}
						else{
							echo "--First Name: Data not found ";
						}
					}
					else if($i == 1){
						if($theArray[last_name] != NULL){
							echo "--Last Name: "."$theArray[last_name]"." ";
						}
						else{
							echo "--Last Name: Data not found ";
						}
					}
					else if($i == 2){
						if($theArray[age] != NULL){
							echo "--Age: "."$theArray[age]"." ";
						}
						else{
							echo "--Age: Data not found ";
						}
					}
					else if($i == 3){
					if($theArray[occupation] != NULL){
							echo "--Occupation: "."$theArray[occupation]"." - - - - ";
						}
						else{
							echo "--Occupation: Data not found  - - - - ";
						}
					}
				}
			}
			unset($theArray);
			unset($theInfo);
		?>
	</body>

</HTML>