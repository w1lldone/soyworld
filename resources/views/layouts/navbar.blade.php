<nav class="navbar">
  <!-- Search Box-->
  <div class="search-box">
    <button class="dismiss"><i class="icon-close"></i></button>
    <form id="searchForm" action="#" role="search">
      <input type="search" placeholder="What are you looking for..." class="form-control">
    </form>
  </div>
  <div class="container-fluid">
    <div class="navbar-holder d-flex align-items-center justify-content-between">
      <!-- Navbar Header-->
      <div class="navbar-header">
        <!-- Navbar Brand -->
          <a href="/home" class="navbar-brand">
          <div class="brand-text brand-big hidden-lg-down"><span><strong>SOY</strong> </span>WORLD</div>
          <div class="brand-text brand-small"><strong>SW</strong></div></a>
        <!-- Toggle Button-->
          <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
      </div>
      <!-- Navbar Menu -->
      <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
        <!-- Search-->
        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>

        @if (auth()->check())
          <!-- Notifications-->
          <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">{{ auth()->user()->unreadNotifications()->count() }}</span></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              @if (auth()->user()->unreadNotifications()->count() == 0)
                <div class="text-center text-muted" style="padding: 10px">
                  <i class="fa fa-3x fa-bell-o mb-3"></i>
                  <h4>Tidak ada notifikasi</h4>
                </div>
              @endif
              @foreach (auth()->user()->unreadNotifications as $notification)
                <li><a rel="nofollow" href="/notifications/{{ $notification->id }}" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-shopping-cart bg-green"></i>{{ $notification->data['message'] }}</div>
                    <div class="notification-time"><small>{{ $notification->created_at->diffForHumans() }}</small></div>
                  </div></a>
                </li>
              @endforeach
              {{-- <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>10 minutes ago</small></div>
                  </div></a></li> --}}
              <li><a rel="nofollow" href="/notifications" class="dropdown-item all-notifications text-center"> <strong>view all notifications</strong></a></li>
            </ul>
          </li>
          <!-- Messages                        -->
          <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-user-o"></i></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li>
                <a rel="nofollow" href="/profile" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">{{ auth()->user()->name }}</h3><span>{{ auth()->user()->privilage->name }}</span>
                  </div>
                </a>
              </li>
              <li><a class="dropdown-item" href="/profile/edit"><i class="fa fa-cog"></i>Ubah profil</a></li>
              <li><a class="dropdown-item" href="/profile/email"><i class="fa fa-envelope"></i>Ubah email</a></li>
              <li><a class="dropdown-item" href="/profile/password"><i class="fa fa-lock"></i>Ubah password</a></li>
              {{-- <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                  </div></a></li> --}}
              {{-- <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li> --}}
            </ul>
          </li>
          <!-- Logout    -->
          <li class="nav-item">
            <form method="POST" action="/logout">
              {{ csrf_field() }}
              <button href="#" type="submit" class="nav-link logout">Logout
                <i class="fa fa-sign-out"></i>
              </button>
            </form>
          </li>

        @endif  

      </ul>
    </div>
  </div>
</nav>