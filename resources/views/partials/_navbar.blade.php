<div class="NavBar">
    <div class="nav-wrapper">
        <div class="logo-section">
            <a href="{{ route('index') }}"><img src='{{ asset('images/Logo.png', true) }}' alt="" class="logo-main" /></a>
        </div>
        <div class="links-section">
            <div class="links-section-wrapper">
            <a href="{{ route('index') }}" class="link-nav">
                    Home
                </a>
                <a href="{{ route('index') }}#3" class="link-nav">
                    About us
                </a>
                <a href="{{ route('index') }}#4" class="link-nav">
                    Services
                </a>
                <a href="{{ route('index') }}#6" class="link-nav">
                    Locations
                </a>
                <a href="{{ route('index') }}#6" class="link-nav">
                    Contacts
                </a>
            </div>
        </div>

        <div class="user-section">
            <div class="button-signin">
                <a href="{{ route('login') }}" class="link-nav-button">
                    Sign In
                </a>
            </div>
            <div class="ep">
              <button class="userBox" id='userbutton' onClick={dropdown}>
              <span class="iconify" data-icon="cif:us" style="color: white" data-width="34" data-height="15" ></span>
              
              </button>
              <div class="links-LogHub" id="menudrop">
                  <h1 class='user-name'>Spider Man importer <br />
                      <p class='email-user'>example@gmail.com</p>
                  </h1>
                  
                  <button class="links-items">
                      <span class="iconify-inline" data-icon="uil:user"></span>
                      <p class="links-name">My Profile</p>
                  </button>
                  <a href="./logistics.html"><button class="links-items">
                      <span
                          class="iconify-inline"
                          data-icon="fluent:data-trending-16-filled"
                      ></span>
                      <p class="links-name">My Logistics</p>
                  </button></a>
                  <a href="./index.html">
                  <button class="links-items">
                      <span
                          class="iconify-inline"
                          data-icon="iconoir:log-out"
                      ></span>
                      <p class="links-name">Log Out</p>
                  </button></a>
                  </div>
              </div>
          <div class="HamMenu">
                <span
                    class="iconify-inline"
                    data-icon="bx:bx-menu"
                ></span>
                <div class="dropdown">
                <a href='{{ route('index') }}' class="link-nav-drop">
                    Home
                </a>
                    <a href="#2" class="link-nav-drop">
                        About us
                    </a>
                    <a href="#3" class="link-nav-drop">
                        Services
                    </a>
                    <a href="#6" class="link-nav-drop">
                        Locations
                    </a>
                    <a href="#6" class="link-nav-drop">
                        Contacts
                    </a>
                </div>
            </div>
         </div>
            
        </div>
</div>