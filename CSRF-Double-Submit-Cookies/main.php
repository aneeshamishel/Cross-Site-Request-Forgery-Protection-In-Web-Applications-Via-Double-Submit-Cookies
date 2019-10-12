<?php

require_once 'mytoken.php';

$val = $_POST["token"];

if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) {
		echo "Server Request Accepted: ".$_POST['updatepost'].", CSRF token matched (cookie == hidden field) ((".$val.")----(".$_COOKIE['csrfTokenCookie']."))";		
	}else {
	    echo "Server Request Failed! Unauthorized Request!".$_COOKIE['csrfTokenCookie'];
	}
}
?>