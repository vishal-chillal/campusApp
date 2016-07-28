<?php 
	#encryptPass is used to encrypt user entered password.
	function encryptPass($userEnteredPass){
		return password_hash(str_rot13($userEnteredPass), PASSWORD_BCRYPT);
	}

	#verifyPass can be used to verify that user entered pass and pass from db are matched.
	function verifyPass($userEnteredPass,$encryptedPassFromDB){
		if (password_verify(str_rot13($userEnteredPass), $encryptedPassFromDB)) {
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
