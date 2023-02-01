<nav class="navbar navbar-expand navbar-light navbar-bg">
  <a class="sidebar-toggle js-sidebar-toggle">
    <i class="hamburger align-self-center"></i>
  </a>

  <div class="navbar-collapse collapse">
    <ul class="navbar-nav navbar-align">
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
          <i class="align-middle" data-feather="settings"></i>
        </a>

        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
          <img src="/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="User" /> <span
            class="text-dark">Charles Hall</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="/profile"><i class="align-middle me-1" data-feather="user"></i>
            Profile</a>
          <a class="dropdown-item" href="/change-password"><i class="align-middle me-1" data-feather="lock"></i>
            Change Password</a>
          <div class="dropdown-divider"></div>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="align-middle me-1" data-feather="log-out"></i>
              Log out</button>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
