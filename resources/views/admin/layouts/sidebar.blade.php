<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
       <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
          </a>
       </li>


       <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="bi bi-circle"></i>
        <span>Customer</span>
        </a>
     </li>




    </ul>
 </aside>
 <!-- End Sidebar-->
