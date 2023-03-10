<header class="header-top">
    <nav class="navbar navbar-light">
      <div class="navbar-left">
        <div class="logo-area">
          <a class="navbar-brand" href="index.html">
            <img class="dark" src="{{asset('assets/img/logo-dark.png')}}" alt="logo">
            <img class="light" src="{{asset('assets/img/logo-white.png')}}" alt="logo">
          </a>
          <a href="#" class="sidebar-toggle">
            <img class="svg" src="{{asset('assets/img/svg/align-center-alt.svg')}}" alt="img"></a>
        </div>
      </div>

      <div class="navbar-right">
        <ul class="navbar-right__menu">
          <li class="nav-search">
            <a href="#" class="search-toggle">
              <i class="uil uil-search"></i>
              <i class="uil uil-times"></i>
            </a>
            <form action="https://demo.dashboardmarket.com/" class="search-form-topMenu">
              <span class="search-icon uil uil-search"></span>
              <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
            </form>
          </li>

          <li class="nav-notification">
            <div class="dropdown-custom">
              <a href="javascript:;" class="nav-item-toggle icon-active">
                <img class="svg" src="{{asset('assets/img/svg/alarm.svg')}}" alt="img">
              </a>
              <div class="dropdown-parent-wrapper">
                <div class="dropdown-wrapper">
                  <h2 class="dropdown-wrapper__title">Notifications <span
                      class="badge-circle badge-warning ms-1">4</span></h2>
                  <ul>
                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                      <div class="nav-notification__type nav-notification__type--primary">
                        <img class="svg" src="{{asset('assets/img/svg/inbox.svg')}}" alt="inbox">
                      </div>
                      <div class="nav-notification__details">
                        <p>
                          <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                          <span>sent you a message</span>
                        </p>
                        <p>
                          <span class="time-posted">5 hours ago</span>
                        </p>
                      </div>
                    </li>
                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                      <div class="nav-notification__type nav-notification__type--secondary">
                        <img class="svg" src="{{asset('assets/img/svg/upload.svg')}}" alt="upload">
                      </div>
                      <div class="nav-notification__details">
                        <p>
                          <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                          <span>sent you a message</span>
                        </p>
                        <p>
                          <span class="time-posted">5 hours ago</span>
                        </p>
                      </div>
                    </li>
                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                      <div class="nav-notification__type nav-notification__type--success">
                        <img class="svg" src="{{asset('assets/img/svg/log-in.svg')}}" alt="log-in">
                      </div>
                      <div class="nav-notification__details">
                        <p>
                          <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                          <span>sent you a message</span>
                        </p>
                        <p>
                          <span class="time-posted">5 hours ago</span>
                        </p>
                      </div>
                    </li>
                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                      <div class="nav-notification__type nav-notification__type--info">
                        <img class="svg" src="{{asset('assets/img/svg/at-sign.svg')}}" alt="at-sign">
                      </div>
                      <div class="nav-notification__details">
                        <p>
                          <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                          <span>sent you a message</span>
                        </p>
                        <p>
                          <span class="time-posted">5 hours ago</span>
                        </p>
                      </div>
                    </li>
                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                      <div class="nav-notification__type nav-notification__type--danger">
                        <img src="{{asset('assets/img/svg/heart.svg')}}" alt="heart" class="svg">
                      </div>
                      <div class="nav-notification__details">
                        <p>
                          <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                          <span>sent you a message</span>
                        </p>
                        <p>
                          <span class="time-posted">5 hours ago</span>
                        </p>
                      </div>
                    </li>
                  </ul>
                  <a href="#" class="dropdown-wrapper__more">See all incoming activity</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-author">
            <div class="dropdown-custom">
              <a href="javascript:;" class="nav-item-toggle"><img src="{{asset('assets/img/author-nav.jpg')}}" alt=""
                  class="rounded-circle">
                <span class="nav-item__title">Danial<i class="las la-angle-down nav-item__arrow"></i></span>
              </a>
              <div class="dropdown-parent-wrapper">
                <div class="dropdown-wrapper">
                  <div class="nav-author__info">
                    <div class="author-img">
                      <img src="{{asset('assets/img/author-nav.jpg')}}" alt="" class="rounded-circle">
                    </div>
                    <div>
                      <h6>Rabbi Islam Rony</h6>
                      <span>UI Designer</span>
                    </div>
                  </div>
                  <div class="nav-author__options">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="uil uil-user"></i> Profile</a>
                      </li>
                    </ul>
                    <a href="{{ route('logout') }}" class="nav-author__signout"
                  onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> <i class="uil uil-sign-out-alt"></i> Sign Out</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
                  </div>
                  
                </div>

              </div>
            </div>
          </li>

        </ul>

        <div class="navbar-right__mobileAction d-md-none">
          <a href="#" class="btn-search">
            <img src="{{asset('assets/img/svg/search.svg')}}" alt="search" class="svg feather-search">
            <img src="{{asset('assets/img/svg/x.svg')}}" alt="x" class="svg feather-x"></a>
          <a href="#" class="btn-author-action">
            <img class="svg" src="{{asset('assets/img/svg/more-vertical.svg')}}" alt="more-vertical"></a>
        </div>
      </div>

    </nav>
  </header>