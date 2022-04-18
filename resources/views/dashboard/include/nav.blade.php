<div class="navbar-expand-md">
    <div class="collapse navbar-collapse " id="sideBarToggler">
        <div class="sidebar close">
            <div class="logo-details">
                <i class='bx bx-menu'></i>
            </div>
    <ul class="nav-links">
        <li>
            <a href=" {{route('dashboard')}} ">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
        </li>


        <li>
            <div class="iocn-link">
                <a href="{{route('service')}}">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Services</span>
                </a>
               
            </div>
          
        </li>


        <li>
            <a href="{{url('/#plain')}}">
                <i class='bx bxs-calendar-check'></i>
                <span class="link_name">Our Plans</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('plain')}}">Our Plans</a></li>
            </ul>
        </li>

        <li>
            <a href="{{route('blog')}} ">
                <i class='bx bxl-blogger'></i>
                <span class="link_name">Blogs</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href=" {{route('blog')}} ">Blogs</a></li>
            </ul>
        </li>

        <li>
            <a href=" {{route('invoice')}}">
                <i class='bx bxs-file-pdf'></i>
                <span class="link_name">Create Invoice</span>
            </a>
        </li>

       
    </ul>
</div>
</div>
</div>