<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ route('dashboard') }}">
      <span class="align-middle">{{ env('APP_NAME') }}</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('dashboard') }}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{ request()->is('users*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('users.index') }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->is('jabatan*') ? 'active' : '' }}" href="/jabatan">
          <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Jabatan</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->is('ruangan*') ? 'active' : '' }}" href="/ruangan">
          <i class="align-middle" data-feather="home"></i> <span class="align-middle">Ruangan</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->is('barang*') ? 'active' : '' }}" href="/barang">
          <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Barang</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->is('request*') ? 'active' : '' }}" href="/request">
          <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Request</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->is('reminder*') ? 'active' : '' }}" href="/reminder">
          <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Reminder</span>
        </a>
      </li>
    </ul>

  </div>
</nav>
