<nav class="navbar navbar-expand-lg navbar-light nv">
  <a class="navbar-brand letterc">Nomipro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link letterc" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestión de empleados
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="empleados.php">Empleados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cargos.php">Cargos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="vinculaciones.php">Vinculaciones</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestión de tiempo
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="horarios.php">Horarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="parafiscales.php">Parafiscales</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="horasExtra.php">Horas extra</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestión de nómina
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="controlPagos.php">Control de pagos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="nominas.php">Nómina</a>
          </div>
      </li>
      </ul>
      <ul class="form-inline my-2 my-lg-0">
      <li class="text-white mr-2">Bienvenido <?php echo $_SESSION["usuario_logeado"] ?></li>
      <li class="nav-item active wd bg-dark"><a class="btn btn-outline-secondary my-2 my-sm-0 lyrlo" href="../controller/cerrarSesion.php">Cerrar sesión</a></li>
      </ul>
  </div>
</nav>