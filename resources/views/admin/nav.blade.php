  <div class="row">

            <!--first block / section start here-->
            <div class="col-2 hoa_admin-generalLead-leftDiv">
                <div class="profilebar" style="display: flex;flex-direction: row;align-items: center;">
                    <div class="profilebar_right">
                        <div class="profile">
                            <div class="icon_wrap holder justify-content-center">
                                <span>A</span>
                            </div>
                            <div class="profile_dd">
                                <ul class="profile_ul">
                                    <li><a class="settings" href="#">Settings</a></li>
                                    <li><a class="logout" href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="hoa_admin-generalLead-leftDiv-h3"> &nbsp; Abhinav Prakash</h3>
                    </div>
                </div>

                <div style="margin-top:9%">
                    <a href="#" class="hoa_admin-generalLead-leftDiv-link">Profile Settings</a><span>
                          @if(\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    @endif
                    <form method="get" action="{{ route('admin.logout') }}">
                        @csrf
                        <div class="row mt-3">
                            <button type="submit" class="btn text-primary">Logout</button>
                        </div>
                    </form>
                        <div class="hoa_admin-bottomBorder"></div>
                    </span>
                </div>
                <button class="mt-2 btn hoa_admin-generalLead-other-button">  <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('admin_dashboard')}}  ">Dasboards</a></button>

                <button class="mt-2 btn hoa_admin-generalLead-other-button">  <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('leads')}}  ">Leads</a></button>

                <button class="mt-2 btn hoa_admin-generalLead-other-button" >   <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('ourservice')}}">Our Services
                </a></button>
                <button class="mt-2 btn hoa_admin-generalLead-other-button">   <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('servicecategory')}}  ">Backend Settings</a></button>
                
            </div>
            <!--first block class="hoa_admin-generalLead-active-button mt-2  btn" style="background: #E0E0E0; color: #333; font-weight: 700; text-align: left;" / section ends here-->


<!--

<div class="col-2 hoa_admin-generalLead-leftDiv">
    <div class="profilebar" style="display: flex;flex-direction: row;align-items: center;">
        <div class="profilebar_right">
            <div class="profile">
                <div class="icon_wrap holder justify-content-center">
                    <span>A</span>
                </div>
                <div class="profile_dd">
                    <ul class="profile_ul">
                        <li><a class="settings" href="#">Settings</a></li>
                        <li><a class="logout" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
            <h3 class="hoa_admin-generalLead-leftDiv-h3"> &nbsp; Abhinav Prakash</h3>
        </div>
    </div>
  @if(\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    @endif
                    <form method="get" action="{{ route('admin.logout') }}">
                        @csrf
                        <div class="row mt-3">
                            <button type="submit" class="btn">Logout</button>
                        </div>
                    </form>
    <div style="margin-top:9%">
        <a href="#" class="hoa_admin-generalLead-leftDiv-link">Profile Settings</a><span>
            <div class="hoa_admin-bottomBorder"></div>
        </span>
    </div>
    <button class="mt-5 btn hoa_admin-generalLead-other-button">Leads</button>
      <div>
        <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('ourservice')}}  ">Our Services</a>
    </div>
    <div>
        <a class="hoa_admin-generalLead-leftDiv-backend" href=" {{route('servicecategory')}}  ">Services Category</a>
    </div>
    <div>
        <a class="hoa_admin-generalLead-leftDiv-backend" href="#">Backend Settings</a>
    </div>

    
        <a  href="  {{route('uploadblog')}} ">  <button class="mt-5 btn hoa_admin-generalLead-other-button">uploadblog</button></a>
    
</div>-->