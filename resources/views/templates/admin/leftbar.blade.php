<aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="{{ $urlAdmin }}/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered">Marcel Newman</h5>
                    <li class="mt">
                        <a class="active" href="{{ route('admin.index.index')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub">
                        <a href="{{ route('admin.doctor.index')}}">
                          <i class="fa fa-user-md"></i>
                          <span>Doctor</span>
                        </a>                        
                    </li>
                    <li class="sub">
                        <a href="{{ route('admin.faculty.index')}}">
                          <i class="fa fa-sitemap"></i>
                          <span>Faculty</span>
                        </a>
                        
                    </li>
                    <li class="sub">
                        <a href="">
                          <i class="fa fa-btc"></i>
                          <span>Status</span>
                        </a>                        
                    </li>

                    
                </ul>
            </div>
        </aside>