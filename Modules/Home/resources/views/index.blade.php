<!DOCTYPE html>
<html lang="nl">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Page title -->
    <title>RC vliegtuig manager</title>
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <!-- tab icon -->
	  <link rel="icon" href="/media/images/TRMC_LOGO_PNG.ico" type="image/x-icon">
  </head>
	<body>
		<main>
			<!-- NAVBAR -->
      <!--
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
				<a class="navbar-brand text-white" href="#">
					<img src="/media/images/TRMC_LOGO_PNG.ico" width="30" height="30" class="d-inline-block align-top" alt="">
					TRMC vlucht manager
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link text-white" href="/index.html">Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link text-white" href="/form.html">Vlucht aanmelden</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link text-white" href="/admin.html">Admin pagina</a>
						</li>      
						<li class="nav-item active">
							<a class="nav-link text-white" href="/login.html">Login pagina</a>
						</li>                        
					</ul>
				</div>
			</nav>
      -->
			<!-- END NAVBAR -->

      <!-- Homepage -->
      <div class="container">
        <h1 class="text-white text-center mt-4">Vlucht manager home</h1>
        <p class="text-white text-center">Wordt aan gewerkt</p>
        <p class="text-white text-center">Ga ondertussen naar de aanmeld form: <a href="/aanmeld-formulier">Klik hier</a></p>
        <p class="text-white text-center">Ga ondertussen naar de admin pagina: <a href="/admin">Klik hier</a></p>
        <p class="text-white text-center">Ga ondertussen naar de login pagina: <a href="/login">Klik hier</a></p>

      </div>
		</main>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Google reCCHAPTA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- Temp styleing -->
    <style>
      body, html {
        background-color: #2f3031;
      }
    </style>
    <!-- Temp JS -->
    <script>
      function requiredHideViewer(e) {
        if(e.value != ''){
          document.getElementById(e.id + '_required').style.visibility = "hidden";
          return;
        }	
        document.getElementById(e.id + '_required').style.visibility = "visible";
      }
    </script>

	</body>
</html>