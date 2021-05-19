<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Página de Login!!!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
   
  <nav class="grey darken-4">
  </nav>

	  <div class="had-container">

<div class="parallax-container logueo">
 <div class="parallax"><img src="imagens/FEMA1.png"></div>
 <div class="row"><br>
	 <div class="col m8 s8 offset-m2 offset-s2 center">
		 <h4 class="truncate bg-card-user">
			 <img src="imagens/fema.png" alt="" class="circle responsive-img">
			 <div class="row login">
				 <h4>Seja Bem Vindo ao Sistema Rodeio FEMA</h4>
			   <form class="col s12" method="POST" action="login.php">
				 <div class="row">
					<div class="input-field col m12 s12">
					 <i class="material-icons iconis prefix">account_box</i>
					 <input id="icon_prefix" type="text" class="validate" name="usuario">
					 <label for="icon_prefix">Usuário</label>
				   </div>
				 </div>
				 <div class="row">
				   <div class="input-field col m12 s12">
					 <i class="material-icons iconis prefix">enhanced_encryption</i>
					 <input id="password" type="password" class="validate" name="senha">
					 <label for="password">Senha</label>
				   </div>
				 </div>
				 <div class="row">
				     <input type="submit" class="btn waves-effect waves-light blue" value="Validar"></input>
					
				 </div>
			   </form>
			 </div>
		 </h4>
		</div>
   </div>
</div>
</div>


</div> <!-- fin del .container -->


<footer class="page-footer grey darken-4">
    <div class="footer-copyright">
        <div class="container center">
        	FEMA - 2º BCC - 2021
        </div>
    </div>
</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
  </body>
</html>

<script>
	$(document).ready(function(){
    		$('.button-collapse').sideNav({
		      menuWidth: 300, // Default is 300
		      edge: 'left', // Choose the horizontal origin
		      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		      draggable: true, // Choose whether you can drag to open on touch screens,
		      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
		      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
		    }
		  );
      		$('.parallax').parallax();
    	});
</script>