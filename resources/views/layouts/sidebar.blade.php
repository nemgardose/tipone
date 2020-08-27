<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="img/logo/main-logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">Mini-CRM</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('companies.index') }}">
          <i class="fas fa-building"></i>
          <span>Companies</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('employees.index') }}">
          <i class="fas fa-users"></i>
          <span>Employees</span>
        </a>
    </li>
</ul>
<!-- Sidebar -->