
<?php

		function displayArray()
		{
			include'user-array.php';

			error_log(print_r($user_array, true));

			foreach ($user_array as $theArray) {
				foreach($theArray as $key => $value) {
					if(!empty($value)){
						echo $key."-->".$value."<br>";
					}
				}	
			}
			unset($theArray);
			unset($theInfo);
		}
?>			
