<!DOCTYPE html PUBLIC> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Bitcoin Finder - Panel de administración</title>

<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		
	}
	
	.login_box {
	width: 220px;
	padding: 10px;
	border: 3px solid #FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size: 10px;
	margin: 100px auto 10px auto;
	
	}
	
	.login_title {
		font-size: 12px;
		font-weight: bold;
	}
	
	.login_text {
	font-size: 18px;
	font-weight: bold;
	color: #848484;
	}
	
	.login_input {
		width: 210px;
		padding: 5px;
		margin: 2px 0 2px 0;
		border: 1px solid #39F; 
		font-size: 16px;
	
	}
	.login {
	font: bold 12px Helvetica, Arial, sans-serif;
	width: 100px;
	height: 40px;
	padding: 5px;
	margin: 2px 0 2px 0;
	border: 1px solid #FFF;
	font-size: 15px;
	background-color:#39F;
	
	}
	
	.error {
		font-weight: bold;
		color: #C30;
	}
	
</style>
</head>

<body bgcolor="#81BEF7"><p align="center">&nbsp;</p>
<div align="center"><p align="center">&nbsp;</p></div><div align="center"><strong>Panel de Administración</strong><br>Bitcoin Finder (v4.0) by @NechuZ</div> 
<form action="" method="post">
  <div class="login_box">
    <span class="login_title"></span><br />
    <br /><br />
    
    <?php $login->error_login(); ?>
    
    <span class="login_text">Usuario</span><br />
    <input name="username" type="text" class="login_input" /><br />
    <span class="login_text">Contraseña</span><br />
    <input name="password" type="password" class="login_input" /><br /><br />
	<div align="right"><input name="login" type="submit" class="login" value="Login" /></div>
</div>
</form>

</body>
</html>