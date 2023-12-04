  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Welcome</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/profil.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{ Auth::check() ? Auth::user()->name : 'Guest' }}
          </a>
        </div>
      
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-home"></i>
                   <p>
                     Dashboard
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Card</p>
                    </a>
                  </li>  
                </ul>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="/dashboard/column" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Column Chart</p>
                     </a>
                   </li>  
                 </ul>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/dashboard/pie" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pie Chart</p>
                    </a>
                  </li>  
                </ul>
               </li>
          <li class="nav-item">
            <a href="/crud" class="nav-link">
              <i class="nav-icon fa fa-calculator"></i>
              <p>
                CRUD Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/categories" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Kategori Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Daftar Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/bio" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Bio Pembuat Web
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>