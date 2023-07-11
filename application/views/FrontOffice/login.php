<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=<?php echo site_url("assets/css/login.css"); ?>>
	<title>Login</title>
</head>
<body>
	<div class="login-wrap" style="top: 100px;">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form action=<?php echo site_url("login/ok"); ?> method="post">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</div>
				</form>
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Nom</label>
						<input id="user" name="nom" type="text" class="input">
					</div>
					<div class="group">
						<label for="user" class="label">Prenom</label>
						<input id="user" name="prenom" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Mot de passe</label>
						<input id="pass" name="password" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass1" class="label">Veuillez réesayer</label>
						<input id="pass1" name="password1" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="pass" name="email" type="text" class="input">
					</div>
					<div class="group">
						<label for="genre" class="label">Genre</label>
						<select name="genre" id="" class="input" style="color:black;">
							<option value="">Femme</option>
							<option value="">Homme</option>
							<option value="">Autre</option>
						</select>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>