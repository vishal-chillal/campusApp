<?php 
	#encryptPass is used to encrypt user entered password.
	function encryptPass($userEnteredPass){
		return password_hash($userEnteredPass, PASSWORD_BCRYPT);
	}

	#verifyPass can be used to verify that user entered pass and pass from db are matched.
	function verifyPass($userEnteredPass,$encryptedPassFromDB){
		if (password_verify($userEnteredPass, $encryptedPassFromDB)) {
			return 1;
		}
		else{
			return -1;
		}
	}
	#Example for better understanding
	$encPass = encryptPass("Harshal"); 
	echo verifyPass("Harshal",$encPass);
?>
