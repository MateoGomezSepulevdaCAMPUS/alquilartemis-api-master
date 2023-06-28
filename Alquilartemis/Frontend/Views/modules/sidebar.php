<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="Views/Assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Views/Assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mateo Gomez</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/personas" class="nav-link <?php if($routes[4] == "personas"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Personas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/constructoras" class="nav-link <?php if($routes[4] == "constructoras"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                  Constructoras
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/productos" class="nav-link <?php if($routes[4] == "productos"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/clientes" class="nav-link <?php if($routes[4] == "clientes"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/empleados" class="nav-link <?php if($routes[4] == "empleados"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Empleados
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/cotizaciones" class="nav-link <?php if($routes[4] == "cotizaciones"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Cotizaciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/cotizacionProductos" class="nav-link <?php if($routes[4] == "cotizacionProductos"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Cotizacion Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/obras" class="nav-link <?php if($routes[4] == "obras"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Obras
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/alquiler" class="nav-link <?php if($routes[4] == "alquiler"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Alquiler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/alquilerDetalle" class="nav-link <?php if($routes[4] == "alquilerDetalle"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Detalle alquiler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/devoluciones" class="nav-link <?php if($routes[4] == "devoluciones"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Devoluciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/devolucionDetalle" class="nav-link <?php if($routes[4] == "devolucionDetalle"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Detalle devoluciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/alquilartemis-api-master/Alquilartemis/Frontend/inventario" class="nav-link <?php if($routes[4] == "inventario"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Inventario
              </p>
            </a>
          </li>        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>