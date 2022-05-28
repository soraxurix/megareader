

<div class="nav_container">
		<nav class="navbar">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="#">
		      
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
					<a class="navbar-link is-size-5 has-text-info" href="#"> <?php echo $_SESSION['name_user']?> </a>
					<div class="navbar-dropdown is-boxed">
						<a class="navbar-item is-size-5 icon-text">
							<span class="icon has-text-success"><i class="fas fa-book"></i></span> 
							<span class="has-text-black">Libros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-primary"><i class="fas fa-user"></i></span>
							<span class="has-text-black">Perfil</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-info"><i class="fas fa-book-reader"></i></span>
							<span class="has-text-black">Mis libros</span>
						</a>
						<hr class="navbar-divider">
						<a class="navbar-item is-size-5 icon-text" href="#"> 
							<span class="icon has-text-warning"><i class="fas fa-question-circle"></i></span>
							<span class="has-text-black">Sobre nosotros</span>
						</a>
						<a class="navbar-item is-size-5 icon-text" href="sesion/cerrar_sesion.php"> 
							<span class="icon has-text-danger"><i class="fas fa-sign-out-alt"></i></span>
							<span class="has-text-black">Cerrar Sesion</span>
						</a>
					</div>
				</div>			
		    </div>
		  </div>
		</nav>
	</div>	

	<script>
		document.addEventListener('DOMContentLoaded', () => {

		  // Get all "navbar-burger" elements
		  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

		  // Add a click event on each of them
		  $navbarBurgers.forEach( el => {
		    el.addEventListener('click', () => {

		      // Get the target from the "data-target" attribute
		      const target = el.dataset.target;
		      const $target = document.getElementById(target);

		      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
		      el.classList.toggle('is-active');
		      $target.classList.toggle('is-active');

		    });
		  });

		});
	</script>