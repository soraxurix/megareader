

<?php 

echo '
<div class="nav_container">
		<nav class="navbar">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="https://megareader.azurewebsites.net/main/">
		      
			  <img src="https://raw.githubusercontent.com/soraxurix/megareader_cloud/main/public/logo%20horizontal.png" width="112" height="28">
		      
		    </a>
		    <div class="navbar-burger" data-target="navBar">
		      <span></span>
		      <span></span>
		      <span></span>
		    </div>
		  </div>

		  <div id="navBar" class="navbar-menu">
		    		    	  
		    <div class="navbar-end">
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link is-size-5 has-text-info" href="#"> '.$_SESSION['name_user'].' </a>
					<div class="navbar-dropdown is-boxed">
						<a class="navbar-item is-size-5 icon-text" href="http://megareader.azurewebsites.net/main/libros/">
							<span class="icon has-text-success"><i class="fas fa-book-reader"></i></span> 
							<span class="has-text-black">Libros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="http://megareader.azurewebsites.net/main/perfil/"> 
							<span class="icon has-text-primary"><i class="fas fa-user"></i></span>
							<span class="has-text-black">Perfil</span>
						</a>
						<hr class="navbar-divider">
						<a class="navbar-item is-size-5 icon-text" href="http://megareader.azurewebsites.net/main/nosotros/"> 
							<span class="icon has-text-warning"><i class="fas fa-question-circle"></i></span>
							<span class="has-text-black">Sobre nosotros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="http://megareader.azurewebsites.net/main/sesion/cerrar_sesion.php"> 
							<span class="icon has-text-danger"><i class="fas fa-sign-out-alt"></i></span>
							<span class="has-text-black">Cerrar Sesion</span>
						</a>
					</div>
				</div>			
		    </div>
		  </div>
		</nav>
	</div>
';


 ?>