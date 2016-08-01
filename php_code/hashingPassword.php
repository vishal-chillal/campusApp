<?php 
	#METHOD 1:
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

	#METHOD 2:
	#More secure way to store password but in this we have to store salt and secret key for each user in db
	#function for encrypting password
	function getSecureHashing($userEnteredPass){
		$salt = '12061994'; #this will be generated using rand() function. and we will store to db for each user
		$iterations = 20000;
		$secretKey = 'ga22me'; #this can be same or different for each user.
		$hash = hash_pbkdf2("sha256", $userEnteredPass, $salt, $iterations,20);
		$encryptedPassword = hash_hmac('ripemd160', $hash, $secretKey);
		return $encryptedPassword;
	}

	#function for decrypting password. checks if user entered pass and db pass is matched
	function verifySecureHashing($userEnteredPass,$encryptedPassFromDB){
		$salt = '12061994'; #this will be retrieved from db
		$iterations = 20000;
		$secretKey = 'ga22me'; #this will be retrieved from db
		$hash = hash_pbkdf2("sha256", $userEnteredPass, $salt, $iterations,20);
		$userPassEncrypted = hash_hmac('ripemd160',$hash, $secretKey);
		if ($userPassEncrypted == $encryptedPassFromDB){
			return 1;
		}
		else{
			return -1;
		}
	}

	#Example for understanding
	$userEnteredPass = "harshal"; #this is password which will be retrieved from user 
	$encryptedPassFromDB = getSecureHashing("harshal"); #this is encrypted password stored in db.
	echo verifySecureHashing($userEnteredPass,$encryptedPassFromDB); #function call to verify password
?>
