@extends('admin.layout')
@section('content')
<div class="container-fluid">
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
                    <div class="hoa_admin-bottomBorder"></div>
                </span>
            </div>
            <button class="mt-5 btn hoa_admin-generalLead-other-button">Leads</button>
            <button class="hoa_admin-generalLead-active-button mt-3 mb-4 btn">Our Services</button>
            <div>
                <a class="hoa_admin-generalLead-leftDiv-backend" href="#">Backend Settings</a>
            </div>
        </div>
        <!--first block / section ends here-->

        <!--middle block / section start here-->
        <div class="col-7">
            <div class="col-11 m-auto">
                <div class="row mt-5 hoa_admin-middle-row">
                    <div class="hoa_admin-middle-row-serviceName">Bookkeeping
                    </div>
                </div>

                <div class="row mt-4 hoa_admin-middle-row">
                    <div class="hoa_admin-middle-row-serviceName">Reconciliatio
                    </div>
                </div>

                <div class="row mt-4 hoa_admin-middle-row">
                    <div class="hoa_admin-middle-row-serviceName">Payrole service
                    </div>
                </div>


            </div>
        </div>
        <!--middle block / section ends here-->

        <!--rightmost(third) block / section start here-->
        <div class="col-3 hoa_admin-rightmost-div">
            <div class="mt-4 hoa_admin-serviceHead-heading">Service main
                Heads</div>

            <div class="mt-4">

                <p>
                    <a class="hoa_admin-rightMost-collapse active" data-bs-toggle="collapse" href="#Accounting"
                        role="button" aria-expanded="false" aria-controls="Accounting"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Accounting
                    </a>
                </p>
                <div class="collapse mb-3" id="Accounting">
                    <ul style="list-style-type:circle;">
                        <li>Bookkeeping</li>
                        <li>Reconciliation</li>
                        <li>Payrole service</li>
                    </ul>
                </div>


                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Taxation" role="button"
                        aria-expanded="false" aria-controls="Taxation"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Taxation
                    </a>
                </p>
                <div class="collapse mb-3" id="Taxation">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>

                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Incorporation"
                        role="button" aria-expanded="false" aria-controls="Incorporation"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Incorporation
                    </a>
                </p>
                <div class="collapse mb-3" id="Incorporation">
                    <div class="collaspe in">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>

                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Registration"
                        role="button" aria-expanded="false" aria-controls="Registration"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Registration
                    </a>
                </p>
                <div class="collapse mb-3" id="Registration">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>

                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Certification"
                        role="button" aria-expanded="false" aria-controls="Certification"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Certification
                    </a>
                </p>
                <div class="collapse mb-3" id="Certification">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>


                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse"
                        href="#Income_tax_return_filling" role="button" aria-expanded="false"
                        aria-controls="Income_tax_return_filling" style="border: transparent;color: black;"><img
                            src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Income tax return filling
                    </a>
                </p>
                <div class="collapse mb-3" id="Income_tax_return_filling">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>


                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Legal/Complaince"
                        role="button" aria-expanded="false" aria-controls="Legal/Complaince"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Legal/ Complaince
                    </a>
                </p>
                <div class="collapse mb-3" id="Legal/Complaince">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>

                <p>
                    <a class="hoa_admin-rightMost-collapse" data-bs-toggle="collapse" href="#Exim_Policy"
                        role="button" aria-expanded="false" aria-controls="Exim_Policy"
                        style="border: transparent;color: black;"><img src="assets/icons/rightArrow.svg" />
                        &nbsp;&nbsp;Exim Policy
                    </a>
                </p>
                <div class="collapse mb-3" id="Exim_Policy">
                    <div>
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>

            </div>
        </div>
        <!--rightmost(third) block / section ends here-->
    </div>
</div>
</div>


    
@endsection