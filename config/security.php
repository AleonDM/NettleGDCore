<?php
$sessionGrants = true; //false = GJP check is done every time; true = GJP check is done once per hour; significantly improves performance, slightly descreases security
$unregisteredSubmissions = false; //false = green accounts can't upload levels, appear on the leaderboards etc; true = green accounts can do everything
$preactivateAccounts = false; //false = acounts need to be activated at tools/account/activateAccount.php; true = accounts can log in immediately
$enableCaptcha = true;

$captchaType = 1; // 1 - Classic, 2 - hCaptcha, 3 - reCAPTCHA
if($captchaType == 2) {
	$hCaptchaKey = "";
	$hCaptchaSecret = ""; // Starts with 0x
}
else if($captchaType == 3) {
	$reCaptchaKey = "";
	$reCaptchaSecret = "";
}