<?php
require('_login_users.php');
require('_login_class.php');
$login = new login_class;
$today_ts = strtotime("now");
$today_m = date('n', $today_ts);
$pass_login = FALSE;
$login->domain_code = $domain_code;
$login->today_ts = $today_ts;
$login->today_m = $today_m;
$login->users = $users;
$login->num_1 = $random_num_1;
$login->num_2 = $random_num_2;
$login->num_3 = $random_num_3;
if (!$login->verify_settings()) {
	echo '<strong>Hay problemas en la configuración</strong><br />Compruebe que todo este correcto';
	exit();
}
if (isset($_COOKIE[$domain_code.'_uid']) && $_COOKIE[$domain_code.'_uid']!='' && isset($_COOKIE[$domain_code.'_cid']) && $_COOKIE[$domain_code.'_cid']!='') {
	$key_uid = $login->cleanse_input($_COOKIE[$domain_code.'_uid']);
	$key_cid = $login->cleanse_input($_COOKIE[$domain_code.'_cid']);
	
	if (!$login->verify_login($key_uid, $key_cid)) {
		$login->error_message = 'La sesión expiró';
	} else {
		$pass_login = TRUE;	
	}
}
if (!$pass_login) {
	$need_login = TRUE;
	if (isset($_POST['login'])) {
		$login_user = $login->cleanse_input($_POST['username']);
		$login_pass = $login->cleanse_input($_POST['password']);
				if ($login->check_login($login_user, $login_pass)) {
			$login->encryption_key($login_user);	
			$need_login = FALSE;
		} else {
			$login->error_message = 'Usuario o contraseña incorrectos';	
			$need_login = TRUE;
		}
	} 
	if ($need_login) {
		require('_login_page.php');
		exit();
	}
}




?>