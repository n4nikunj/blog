 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{IMGPATH}}faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Session::get('userDetail')['name']}}</p>
                  <div>
                    <small class="designation text-muted"> @if (Session::get('userDetail')['userType'] == 1) Administrator @else User @endif</small>
                    <span class="status-indicator online"></span>
                  </div>
				   <div>
                    <small class="designation text-muted"> <a href="{{BACKENDURL}}signout"> Sign out</a></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{BACKENDURL}}dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
		  @foreach ($menu as $key=>$value)
           <li class="nav-item">
            <a class="nav-link" href="{{BACKENDURL.$value->link}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">{{$value->menuName}}</span>
            </a>
          </li>
		  @endforeach
          
        </ul>
      </nav>
      