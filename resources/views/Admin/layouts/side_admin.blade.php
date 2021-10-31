<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('Admin/dist/img/Atik.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                {{------------Products---------------}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>Category<i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('side_admin.Add_categori')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('side_admin.All_categori')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Category </p>
                            </a>
                        </li>
                    </ul>
                </li>
                             {{----------Products---------------}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-eye"></i>
                        <p>Manufactures<i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('side_admin.add_manufactures')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Manufactures</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('side_admin.All_manufacture')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Manufactures </p>
                            </a>
                        </li>
                    </ul>
                </li>
                         {{----------Products---------------}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>Products<i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('side_admin.Add_Products_click')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('side_admin.all_Products_click')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Products </p>
                            </a>
                        </li>
                    </ul>
                </li>

                          {{----------Products---------------}}


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>Slider<i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('HomepageSlider')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('home_allslider')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Slider </p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="{{route('order_information')}}" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>Order Information</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-circle-o text-danger"></i>
                        <p class="text">Social Link</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-circle-o text-danger"></i>
                        <p class="text">Shop Name</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-circle-o text-danger"></i>
                        <p class="text">Delivery Man</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fa fa-sign-out text-info"></i>
                        <p> Logout</p>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>