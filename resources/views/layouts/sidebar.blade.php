<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="menu-sidebar"><a href="{{ url('/admin/dashboard') }}"><span class="fa fa-dashboard"></span> Dashboard</span></a></li>
        <li class="treeview active" style="height: auto;">
          <a href="#">
            <i class="fa fa-database"></i> <span>Data Master</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="menu-sidebar"><a href="{{ url('/admin/daftarmenu') }}"><span class="fa fa-book"></span> Menu</span></a></li>
            <li class="menu-sidebar"><a href="{{ url('/admin/layanan') }}"><span class="fa fa-book"></span> Layanan</span></a></li>            
          </ul>
        </li>        
        <li class="menu-sidebar"><a href="{{ url('/admin/pemesanan') }}"><span class="fa fa-shopping-cart"></span> Pemesanan</span></a></li>        

        <li class="menu-sidebar"><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>