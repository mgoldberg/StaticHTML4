
<?php

		function displayArray()
		{
			include'user-array.php';

			foreach ($user_array as $theArray) {
				for($i = 0; $i < 4; $i++) {
					if($i == 0){
						if(!empty( $theArray[first_name] ) ){
							echo "--First Name: "."$theArray[first_name]"." ";
						}
					}
					else if($i == 1){
						if($theArray[last_name] != NULL){
							echo "--Last Name: "."$theArray[last_name]"." ";
						}					}
					else if($i == 2){
						if($theArray[age] != NULL){
							echo "--Age: "."$theArray[age]"." ";
						}
					}
					else if($i == 3){
						if($theArray[occupation] != NULL){
							echo "--Occupation: "."$theArray[occupation]"." <br><br>";
						}
					}
				}
			}
			unset($theArray);
			unset($theInfo);
		}
?>			
