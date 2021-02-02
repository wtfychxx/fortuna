<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
      <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="<?= BASE_PATH ?>/public/admin/images/avatar-4.jpg" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
      <div class="p-15 p-b-0">
          <form class="form-material">
              <div class="form-group form-primary">
                  <input type="text" name="footer-email" class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
              </div>
          </form>
      </div>
      <div class="pcoded-navigation-label">Navigation</div>
      <ul class="pcoded-item pcoded-left-item menu-header">
          <li class="">
              <a href="index.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext">Dashboard</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
      </ul>

      <div class="pcoded-navigation-label"> Store </div>
      <ul class="pcoded-item pcoded-left-item menu-header">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-package"></i><b> S </b></span>
              <span class="pcoded-mtext"> Management </span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Profile </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Recipe Book </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="<?= BASE_PATH ?>/product" class="waves-effect waves-dark">
                  <span class="pcoded-mtext"> Product </span>
                  <span class="micon"><i class=""></i></span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="<?= BASE_PATH ?>/officer" class="waves-effect waves-dark">
                  <span class="micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Officer </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Authorization </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>T</b></span>
              <span class="pcoded-mtext"> Transaction </span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Payment </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
        </ul>

      <div class="pcoded-navigation-label"> Report </div>
      <ul class="pcoded-item pcoded-left-item menu-header">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-receipt"></i><b>R</b></span>
              <span class="pcoded-mtext"> Report </span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Summary Report </span>
                  <span class="mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class=""></i></span>
                  <span class="pcoded-mtext"> Transaction Report </span>
                  <span class="mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
      </ul>

      <div class="pcoded-navigation-label"> Account </div>
      <ul class="pcoded-item pcoded-left-item menu-header">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-settings"></i><b>A</b></span>
              <span class="pcoded-mtext"> Settings </span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i></i></span>
                  <span class="pcoded-mtext"> Personal Data </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>

              <li class="">
                <a href="" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i></i></span>
                  <span class="pcoded-mtext"> Change Password </span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </div>
</nav>
