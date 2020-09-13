<!doctype html>
<html lang="pt-br">
	<head>
		<title>Ello Code</title>
		<meta name="description" content="Page description"><!-- Max 155 characters -->
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--Dependencies-->
		<link rel="stylesheet" href="<?php echo DIRCSS.'alldep.min.css' ?>" /> 

		<!-- Css Project -->
		<link rel="stylesheet" href="<?php echo DIRCSS.'style.css' ?>" />

		<!--Tag Hotjar-->

		<!--Tag Analytics-->

		<!-- twitter card data (https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary-card-with-large-image) -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@publisher_handle">
		<meta name="twitter:title" content="Page Title"><!-- Max 70 characters -->
		<meta name="twitter:description" content="Page description"><!-- Max 200 characters -->
		<meta name="twitter:image:alt" content="Share image alt text">

		<!-- open graph data -->
		<meta property="og:title" content="Page Title"><!-- Max 70 characters -->
		<meta property="og:type" content="article">
		<meta property="og:url" content="http://www.example.com/"><!-- current page URL -->
		<meta property="og:description" content="Page description">
		<meta property="og:site_name" content="Site Name, i.e. Engage">
	</head>
	<body>
		
		<section id="login">
			<div class="container">
				<div class="login-form">
					<img src="<?php echo DIRIMG.'logo-normal.png'; ?>" alt="Logo Ello Code">
					<form action="">
						<div class="login-form__input">
							<input type="text" class="form-control">
							<label>Login</label>
						</div>
						<div class="login-form__input">
							<input type="password" class="form-control">
							<label>Senha</label>
						</div>
						<input type="submit" class="btn btn-primary">
					</form>
					<a href="" class="forgot">
						Esqueceu a senha?
					</a>
					<p class="create">
						Não tem uma conta? <a href="">Criar conta</a>
					</p>
				</div>
			</div>
		</section>


		<!-- Script Project -->
		<script src="<?php echo DIRJS.'alldep.min.js'; ?>" crossorigin="anonymous"></script>
		<script src="<?php echo DIRJS.'scripts.js'; ?>" crossorigin="anonymous"></script>
	</body>
</html>