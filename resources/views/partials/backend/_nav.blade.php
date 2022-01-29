 <!-- BEGIN: Side Menu -->
 <nav class="side-nav">
    <a href="{{ route('home') }}" class="intro-x flex items-center pl-5 pt-4">
        <span class="hidden xl:block text-white text-lg ml-3"> ADC <span class="font-medium">Logistics</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @if (auth()->user()->hasRole('admin'))
        <li>
            <a href="{{ route('admin') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @else
        <li>
            <a href="{{ route('home') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @endif

        @if (auth()->user()->hasRole('admin'))
        <li>
            <a href="{{ route('package.create') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> Create Shipment</div>
            </a>
        </li>
        <li>
            <a href="{{ route('packages') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> Shipments </div>
            </a>
        </li>
        @else
        <li>
            <a href="side-menu-file-manager.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> Get a Quick Quote</div>
            </a>
        </li>
        @endif

       @if (auth()->user()->hasRole('admin'))
       <li>
            <a href="side-menu-point-of-sale.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> All Transactions </div>
            </a>
        </li>   
       @else
       <li>
            <a href="side-menu-post.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Transactions </div>
            </a>
        </li>
       @endif
        
       @if (auth()->user()->hasRole('admin'))
       <li>
            <a href="{{ route('notification.email') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Send Email </div>
            </a>
        </li>   
       <li>
            <a href="{{ route('notifications.sms') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Send SMS </div>
            </a>
        </li>   
       @else
       <li>
            <a href="side-menu-chat.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Overseas Shipping </div>
            </a>
        </li>
       @endif 
      
        <li>
            <a href="side-menu-post.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Pay Bills </div>
            </a>
        </li>

        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-invoice-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-invoice-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-update-profile.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-change-password.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->