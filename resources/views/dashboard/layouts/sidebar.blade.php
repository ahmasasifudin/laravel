<style>
  .fa-caret-down {
    float: right;
    padding-right: 8px;
    color: #000000;
  }

  .dropdown-btn:hover {
    color: #000000;
  }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="monitor" class="align-text-bottom"></span>
            DASHBOARD
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/qc-in*') ? 'active' : '' }}" href="/dashboard/qc-in">
            <span data-feather="user" class="align-text-bottom"></span>
            QC IN
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/qc-lane*') ? 'active' : '' }}" href="/dashboard/qc-lane">
            <span data-feather="users" class="align-text-bottom"></span>
            QC LANE
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/rtrw*') ? 'active' : '' }}" href="/dashboard/rtrw">
            <span data-feather="pocket" class="align-text-bottom"></span>
            RTRW
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/loading-zone*') ? 'active' : '' }}" href="/dashboard/loading-zone">
            <span data-feather="folder-plus" class="align-text-bottom"></span>
            LOADING ZONE
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link dropdown-btn">
            <span data-feather="briefcase" class="align-text-bottom"></span>
            LAPORAN
            <span data-feather="chevron-down" class="align-text-bottom mx-4"></span>
          </a>
          <div class="dropdown-container mx-2">
              <a class="nav-link {{ Request::is('dashboard/laporan-divisi*') ? 'active' : '' }}" href="/dashboard/laporan-divisi">
                <span data-feather="target" class="align-text-bottom"></span>
                LAPORAN DIVISI
              </a>
              <a class="nav-link {{ Request::is('dashboard/laporan-keseluruhan*') ? 'active' : '' }}" href="/dashboard/laporan-keseluruhan">
                <span data-feather="globe" class="align-text-bottom"></span>
                LAPORAN KESELURUHAN
              </a>
              <a class="nav-link {{ Request::is('dashboard/laporan-team*') ? 'active' : '' }}" href="/dashboard/laporan-team">
                <span data-feather="users" class="align-text-bottom"></span>
                LAPORAN TEAM
              </a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/setting*') ? 'active' : '' }}" href="/dashboard/setting">
            <span data-feather="settings" class="align-text-bottom"></span>
            SETTING
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
              Categories Post
            </a>
          </li>
        </ul>
      @endcan

    </div>
</nav>

<script>
  /* Ulangi semua tombol dropdown untuk beralih antara menyembunyikan dan menampilkan konten dropdown - Ini memungkinkan pengguna untuk memiliki beberapa dropdown tanpa konflik*/
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
  }
</script>