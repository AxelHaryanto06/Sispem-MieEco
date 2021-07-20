<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>
        </li>        
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="fa fa-database"></i> <span>Data Master</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="menu-sidebar"><a href="{{ url('/admin/daftarmenu') }}"><span class="fa fa-circle-o"></span> Menu</span></a></li>
            <li class="menu-sidebar"><a href="{{ url('/admin/layanan') }}"><span class="fa fa-circle-o"></span> Layanan</span></a></li>            
          </ul>
        </li>        
        <li>
          <a href="{{ url('/admin/pemesanan') }}">
            <i class="fa fa-shopping-cart"></i> <span>Pemesanan</span>            
          </a>
        </li>        
        <li>
          <a href="{{ route('logout') }}">
            <i class="glyphicon glyphicon-log-out"></i> <span>Logout</span>            
          </a>
        </li>
        {{-- <li class="menu-sidebar"><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li> --}}


      </ul>
    </section>