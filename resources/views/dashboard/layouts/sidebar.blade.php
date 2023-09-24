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
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="monitor" class="align-text-bottom"></span>
            DASHBOARD
          </a>
        </li>

        @if (Auth::user()->role == 'super' || Auth::user()->role == 'admin_in' || Auth::user()->role == 'user_in')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/qc-in*') ? 'active' : '' }}" href="/dashboard/qc-in">
              <span data-feather="user" class="align-text-bottom"></span>
              QC IN
            </a>
          </li>
        @endif
        
        @if (Auth::user()->role == 'super' || Auth::user()->role == 'admin_lane' || Auth::user()->role == 'user_lane')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/qc-lane*') ? 'active' : '' }}" href="/dashboard/qc-lane">
              <span data-feather="users" class="align-text-bottom"></span>
              QC LANE
            </a>
          </li>
        @endif

        @if (Auth::user()->role == 'super' || Auth::user()->role == 'admin_rtrw' || Auth::user()->role == 'user_rtrw')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/rtrw*') ? 'active' : '' }}" href="/dashboard/rtrw">
              <span data-feather="pocket" class="align-text-bottom"></span>
              RTRW
            </a>
          </li>
        @endif

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
      </ul>
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