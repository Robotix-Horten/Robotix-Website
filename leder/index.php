<?php
$server = $_SERVER['SERVER_NAME'];
$ip=$_SERVER['REMOTE_ADDR'];
$username = @$_POST['username'];
$password = @$_POST['password'];
$expire = (60*60*24);



if($username == 'leder' && $password == 'mindst0rms'){
	$ip=$_SERVER['REMOTE_ADDR'];
	$File = "loggedOn_".$ip.".txt"; 
	$Handle = fopen($File, 'w');
	$Data = "Jane Doe\n"; 
	fwrite($Handle, $ip."_true"); 
	fclose($Handle);
	setcookie("robotix_loggedOn","true", time()+$expire);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>
			Robotix - Ledere
		</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css" />
	</head>
	<body>
		<table valign="top" cellspacing="0" border="0" class="center">
			<tr>
				<td style="width:1160px;">
					<h4>Logg p&aring;</h4>
					<form id="logon" method="POST" name="logonLeder" action="http://<?php echo $server."/leder/"; ?>index.php" onSubmit="Javascript: return formChecker();">
						<table>
							<tr>
								<td>
									Brukernavn:
								</td>
								<td>
									<input type="text" id="username" name="username" style="" />
								</td>
							</tr>
								<td>
									Passord:
								</td>
								<td>
									<input type="password" id="password" name="password" style="" />
								</td>
							</tr>
							<tr>
								<td id="errorField" colspan="2" style="color: red; font-size: 0.8em;">
									<?php echo @$_POST['error']; ?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td style="text-align: right;">
									<input type="hidden" value="Feil brukernavn/passord" name="error" id="error" />
									<input type="submit" value="Logg p&aring;" id="submit" style="" />
								</td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
	</body>