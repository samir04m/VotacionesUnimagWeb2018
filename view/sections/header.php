<header>
	
	<div class="navbar-fixed">
		<nav class="purple">
			<div class="nav-wrapper">
				<div class="container">
					<a href="#" class="brand-logo">Portal Administrador</a>
					<ul class="right">
						<li>
							<?php
								if (isset($_SESSION['LOGIN'])){
		                        		echo $_SESSION['NOMBRE_USUARIO'];
								}else{
									echo 'Sesion no iniciada';
								}
		                    ?>	                    	
		                 </li>
						<li><a href="index.php?action=cerrarSesion">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>