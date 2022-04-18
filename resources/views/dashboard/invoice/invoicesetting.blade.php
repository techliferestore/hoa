@extends('dashboard.layout.dlayout')
@section('content')

<main id="main" class="home-section">
        <!-- steper Start -->
        <section class="steper-bg2 bg_white">
            <div class="container-fluid">
                <div class="row">
                    <div class="steper-num" style="margin-bottom: -1.2%;">
                        <ul>
                            <li class="h2 col-md-2 pe-3" style="opacity: 1;"><span><img src="{{asset('/')}}assets/icons/Bill.svg">
                                    <p><a href="{{route('invoice')}}">Invoice</a></p>
                                </span></li>
                            <li style="opacity: 0.3;" class="h2 col-md-2 me-md-5 pe-3"><span><img
                                        src="{{asset('/')}}assets/icons/user.svg" />
                                    <p style="color: #EB5757;"><a href="{{route('invoice')}}"> Invoice Profile</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2 pe-3" style="opacity: 0.3;"><span><img
                                        src="{{asset('/')}}assets/icons/history.svg" />
                                    <p><a href="{{route('invoicehistory')}}"> History</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2" style="opacity: 0.3;"><span><img src="{{asset('/')}}assets/icons/settings.svg"
                                        width="20px" height="20px" />
                                    <p><a href="{{route('invoicesetting')}}">Settings</a></p>
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- steper End -->

        <!--central part for info filling start-->
        <div>
            <section class="bodycont">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-3">

                            <nav class="navbar navbar-expand-md navbar-light">
                                <div class="nav flex-column nav-pills me-3 align-items-start" id="v-pills-tab"
                                    role="tablist" aria-orientation="vertical"
                                    style="font-family:'Inter';text-align: right;">

                                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                        aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -55%;">
                                        <span class="navbar-toggler-icon"></span>
                                    </button> -->

                                    <!-- <div class="justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                                    <!-- <div class="wrapper"> -->
                                    <a class="nav-link mb-2 generalSettingLeftNavtabs h3" type="button">Invoice
                                        Number<div class="hoa_invoice-bottomBorder"></div></span></a>

                                    <a class="nav-link generalSettingLeftNavtabs active mb-2" id="v-pills-regular-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-regular" type="button" role="tab"
                                        aria-controls="v-pills-regular" aria-selected="true">Regular Supply</a>

                                    <a class="nav-link generalSettingLeftNavtabs mb-2" id="v-pills-SEZ-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-SEZ" type="button" role="tab"
                                        aria-controls="v-pills-SEZ" aria-selected="false">SEZ Supply</a>

                                    <a class="nav-link generalSettingLeftNavtabs mb-2" id="v-pills-combination-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-combination" type="button"
                                        role="tab" aria-controls="v-pills-combination" aria-selected="false">Combination
                                        Supply</a>

                                    <a class="nav-link generalSettingLeftNavtabs mb-2" id="v-pills-export-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-export" type="button" role="tab"
                                        aria-controls="v-pills-export" aria-selected="false">Export Supply</a>

                                    <a class="nav-link h3 generalSettingLeftNavtabs mb-2" type="button"
                                        href="generalSettings.html">General
                                        Settings</a>
                                    <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </nav>
                        </div>

                        <div class="col-md-6">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-regular" role="tabpanel"
                                    aria-labelledby="v-pills-regular-tab">

                                    <!--Regular supplies starts-->
                                    @if(session('message'))
                <div class="text-success">{{session('message')}}</div>
            @endif
                                    <form method="POST" action="{{route('storeinvoicesetting')}}"  enctype="multipart/form" >
                                        @csrf
                                        <div class="form-group" style="text-align:left;">
                                            <label for="themeSetting" class="h2">Invoice Number Settings/ Regular
                                                Supply</label>

                                            <div>
                                                <p style="font-family: 'Inter';font-weight: normal;font-style: normal;">
                                                    Set Your Invoice Number</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-4 col-lg-4"
                                                    style="margin-top: 10%;opacity: 0.6;">
                                                    <label for="addPrefix" class="col-sm-12 col-md-12 col-lg-12"><b>Add
                                                            Prefix
                                                        </b><span><input type="radio" name="prefix" /></span></label>
                                                    <input type="text"
                                                        style="padding-left: 10px;border: 1px solid #01655E;outline: 0;"
                                                        class="regular-supply-input col-md-12 col-lg-12"
                                                        id="forPrefix" name="prefix"
                                                        value="@if($invoices){{$invoices->prefix}} @else {{ Request::old('prefix') }} @endif" />
                                                </div>

                                                <div class="col-md-4 col-lg-4" style="margin-top: 10%;">
                                                    <label for="addPrefix" class="col-sm-12 col-md-12 col-lg-12"
                                                        style="color: #239C9C; "><b>Number
                                                        </b></label>
                                                    <input type="text" readonly="readonly" class="regular-supply-input col-md-12 col-lg-12"
                                                        id="forNumber" placeholder="Would be like- 12345" maxlength="4" required
                                                        style="text-align: center;border: 1px solid #01655E;outline: 0;" />
                                                    <!-- <label class="col-sm-12 col-md-12 col-lg-12"
                                                        style="color: #01655E;margin-top: 1%;">Max 4 Digit
                                                        Number</label> -->
                                                </div>

                                                <div class="col-md-4 col-lg-4" style="margin-top: 10%;opacity: 0.6;">
                                                    <label for="addSuffix" class="col-sm-12 col-md-12 col-lg-12"><b>Add
                                                            Suffix
                                                        </b><span><input type="radio" name="suffix" /></span></label>
                                                    <input type="text"
                                                        style="padding-left: 10px;border: 1px solid #01655E;outline: 0;"
                                                        class="regular-supply-input col-md-12 col-lg-12"
                                                        id="forSuffix"  name="suffix"
                                                        value="@if($invoices){{$invoices->suffix}} @else {{ Request::old('suffix') }} @endif"/>
                                                </div>
                                            </div>

                                            <button class="regular-supply-button" type="submit"
                                                style="margin-top: 15%;margin-right: 2%;">Save
                                                Changes</button>

                                            <button type="reset"
                                                style="background: transparent; width: 52px; height: 40px; border:0px;">Reset</button>
                                        </div>
                                    </form>
                                </div>
                                <!--regular supply ends-->

                                <!--SEZ supply starts-->
                                <div class="tab-pane fade" id="v-pills-SEZ" role="tabpanel"
                                    aria-labelledby="v-pills-SEZ-tab">
                                    123...
                                </div>
                                <!--SEZ supply ends-->

                                <!--Combination supply starts here-->
                                <div class="tab-pane fade" id="v-pills-combination" role="tabpanel"
                                    aria-labelledby="v-pills-combination-tab">
                                    234...
                                </div>
                                <!--Combination Supply ends here-->


                                <!--Export supply starts here-->
                                <div class="tab-pane fade" id="v-pills-export" role="tabpanel"
                                    aria-labelledby="v-pills-export-tab">345...
                                </div>
                                <!--Export supply ends here-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--central part ends-->


    </main>

@endsection