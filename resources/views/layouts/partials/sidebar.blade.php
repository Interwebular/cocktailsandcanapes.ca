<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ 'http://www.gravatar.com/avatar/'.md5(Auth::user()->email).'.jpg' }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Navigation</li>

            <li><a href="{{ route('admin.index') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>

            <li><a href="{{ route('admin.users.index') }}"><i class='fa fa-users'></i> <span>Users</span></a></li>

            <li><a href="{{ route('admin.blog.index') }}"><i class='fa fa-pencil-square-o'></i> <span>Blog</span></a></li>

            <li><a href="{{ route('admin.menus.index') }}"><i class='fa fa-book'></i> <span>Menus</span></a></li>

            <li><a href="{{ route('admin.venues.index') }}"><i class='fa fa-building'></i> <span>Venues</span></a></li>

            <li><a href="{{ route('admin.testimonials.index') }}"><i class='fa fa-comments'></i> <span>Testimonials</span></a></li>

            <li><a href="{{ route('admin.gallery.index') }}"><i class='fa fa-image'></i> <span>Gallery</span></a></li>

            {{-- <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li> --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
