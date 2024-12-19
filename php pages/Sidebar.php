<!-- Main Sidebar Container -->
<?php include "Connection.php";?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SREC Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Adminstrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Central Library 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Library_EResources.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-Resources</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Library_Openaccess.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open Access</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="Library_Collections.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collection</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="library_indjrnl.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Indian Journals</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="Library_ieeejournals.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>IEEE Journals</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="Library_listofnewspaper.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List of Newspaper
              </p>
            </a>
          </li>
		</ul>
		</nav> 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
