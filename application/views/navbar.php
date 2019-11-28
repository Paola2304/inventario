<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Welcome') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inventario<sup>USAM</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Welcome') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Equipo y más
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-archive"></i>
            <span>Inventario</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Equipo y muebles:</h6>
              <a class="collapse-item" href="<?php echo base_url('inm_controller') ?>">Inmobiliario</a>
              <a class="collapse-item" href="#">Equipo Mantenimiento</a>
              <a class="collapse-item" href="<?php echo base_url('equid_controller') ?>">Equipo Dañado</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-indent"></i>
            <span>Detalles</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Detalles de inmobiliario:</h6>
              <a class="collapse-item" href="<?php echo base_url('marca_controller') ?>">Marca</a>
              <a class="collapse-item" href="<?php echo base_url('mod_controller') ?>">Modelo</a>
              <a class="collapse-item" href="#">Categoria</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Heading -->
        <div class="sidebar-heading">
          Otros
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Asignaciones</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('area_controller') ?>">
              <i class="fas fa-fw fa-map-signs"></i>
              <span>Áreas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
          Usuarios
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('encargado_controller') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Encargados</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('usuario_controller') ?>">
              <i class="fas fa-fw fa-users"></i>
              <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
          <!-- End of Sidebar -->