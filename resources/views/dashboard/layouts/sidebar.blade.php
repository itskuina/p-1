<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          </li>
          <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
          <span data-feather="home" class="align-text-bottom"></span>
          Home
          </a>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="monitor" class="align-text-bottom"></span>
              Dashboard
            </a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('Data/user') ? 'active' : '' }}" href=" {{ route('user') }} ">
              <span data-feather="user" class="align-text-bottom"></span>
              Users
            </a>
          </li>
        </ul>
      </div>
    </nav>