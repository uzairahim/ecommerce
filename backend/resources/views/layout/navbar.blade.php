<!-- Navbar -->
<nav>
    <div class="container">
        <!-- Header Logo -->
        <div class="logo"><a title="MSK" href="{{url('/')}}"><img alt="MSK" src="{{asset('assets/images/logo.png')}}"
                                                       class="img-fluid"></a>
        </div>
        <!-- End Header Logo -->

        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
        </div>

        <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu {{ Request::is('/')?'active':'' }}"><a
                    href="{{url('/')}}"><span>Home</span></a>
            </li>
        </ul>
        <ul class="nav hidden-xs menu-item menu-item-right">
            <li class="mega-menu {{ Request::is('composition')?'active':'' }}"><a class="level-top"
                                                                                  href="{{url('/composition')}}"><span>Composition</span></a>
            </li>
            <li class="mega-menu"><a class="level-top"
                                     href="{{Request::is('/') ? '#about-us':url('/#about-us')}}"><span>About Us</span></a>
            </li>
        </ul>


    </div>
</nav>
