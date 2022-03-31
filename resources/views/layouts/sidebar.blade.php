<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/home">
          <i class="bi bi-boxes"></i>
          <span>Dashboard</span>
        </a>
      </li>

      @if (Auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link " href="/data">
          <i class="bi bi-people"></i>
          <span>User</span>
        </a>
      </li>
      @endif

      @if (Auth()->user()->role == 'user')
      <li class="nav-item">
            <a class="nav-link" href="/perjalanan">
              <i class="bi bi-cup-straw"></i><span>Perjalanan</span>
            </a>
            <!-- <a href="/kota">
              <i class="bi bi-calendar-plus"></i><span>Kota</span>
            </a> -->
          </li>
         @endif
          

    </ul>

  </aside>